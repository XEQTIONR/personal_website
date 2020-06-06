import React, {Fragment, useState, useEffect} from 'react'
import SelectField from "./atomic/SelectField";
import TextField from "./atomic/TextField"

import axios from "axios"

import MarkdownIt from "markdown-it"

function NewProgram(props){

    const [editor, setEditor] = useState(null)
    const [descriptionEditor, setDescriptionEditior] = useState(null)
    const [title, setTitle] = useState('Untitled')
    const [editingTitle, setEditingTitle] = useState(false);
    const [text, setText] = useState(props.text)
    const [descriptionText, setDescriptionText] = useState(null)
    const [themes, setThemes] = useState(editor_themes.map( (atheme) =>{ return  {value: atheme.theme_id, label: atheme.name }}))
    const [syntaxes, setSyntaxes] = useState(editor_syntaxes.map( (language) =>{ return  {value: language.syntax_id, label: language.name }}))
    const [initLang, setInitLang] = useState(0)
    const [initTheme, setInitTheme] = useState(0)

    const [currentLang, setCurrentLang] = useState(null)

    const [showEditor, setShowEditor] = useState(true)

    const mdParser  =  new MarkdownIt()


    let tempTitle = false

    useEffect(() => {

        if(editor == null)
        {
            let local_editor = ace.edit("editor")

            // local_editor.setTheme("ace/theme/dracula")

            let local_theme = (props.theme && props.theme !=null)
                ? (props.theme)
                : "ace/theme/dracula"

            local_editor.setTheme(local_theme)

            themes.find((atheme, index) =>{

                if(atheme.value == local_theme)
                {
                    setInitTheme(index)
                    return true
                }
                return false
            })

            let local_syntax = (props.lang && props.lang !=null)
                ? (props.lang)
                : syntaxes[0].value

            local_editor.session.setMode(local_syntax)

            syntaxes.find((alang, index) =>{

                if(alang.value == props.lang)
                {
                    setInitLang(index)
                    setCurrentLang(alang.value)
                    return true
                }
                return false
            })



            local_editor.session.on('change', () =>  { setText(local_editor.getValue())})

            if(props.text == null)
                local_editor.setValue("")
            else
                local_editor.setValue(props.text)


            setEditor(local_editor)





            let local_description_editor = ace.edit("descriptionEditor")

            let local_description_theme =  "ace/theme/cobalt"

            local_description_editor.setTheme(local_description_theme)

            local_description_editor.session.setMode("ace/mode/markdown")

            if(descriptionText == null)
                local_description_editor.setValue("")
            else
                local_description_editor.setValue(props.text)


            local_description_editor.session.on('change', () =>  {
                setDescriptionText(local_description_editor.getValue())

                console.log(mdParser.render(local_description_editor.getValue()))
            })

            setDescriptionEditior(local_description_editor)



        }
        else{
            editor.resize()
            editor.focus()

            if(props.lang)
                editor.session.setMode(props.lang);

            descriptionEditor.resize()


        }
    })

    const changeTheme = (theme) =>{

        if(editor != null)
        {
            editor.setTheme(theme)

            if(props.themeCallback != undefined)
                props.themeCallback(theme)
        }

        if(descriptionEditor != null)
            descriptionEditor.setTheme(theme)

    }

    const changeLanguage = (lang) => {
        if(editor != null)
        {
            editor.session.setMode(lang)
            setCurrentLang(lang)
        }

        if(props.langCallback != undefined)
            props.langCallback(lang)
    }


    const store = () => {



        let program_info =
        {title, descriptionText, code : text,
            lang : currentLang
                ? currentLang.split('/').reverse()[0]
                : syntaxes[initLang].value.split('/').reverse()[0]
        }

        axios.post(store_API, program_info)
            .then(res => {

                props.toasterCallback({message : "Success", status : res.data.status});

            })
            .catch(err => {
                props.toasterCallback({message : "Error", status : 'error'});
            })
    }


    const hideCallback = (e) =>{

        e.stopPropagation()

        if(props.setText!= undefined && editor != null)
            props.setText(editor.getValue())

        if(props.hideCallback != undefined)
            props.hideCallback()
    }

    let title_render = editingTitle ?
        <div className="d-flex col-md-6 justify-content-center">
            <div className="row justify-content-center">
                <div className="input-group input-group-sm">
                    <TextField val={title} className="form-control rounded-0 transparent-input"
                               change={(v) => { tempTitle = v }}
                    />
                    <span className="input-group-append">
                        <button type="button" className="btn btn-info btn-sm" onClick={() =>{if(tempTitle.length)setTitle(tempTitle); setEditingTitle(false)}}>
                            <i className="fas fa-check"></i>
                        </button>
                        <button type="button" className="btn btn-danger btn-sm" onClick={() =>{tempTitle = ""; setEditingTitle(false)}}>
                            <i className="fas fa-times"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        :
        ''


    return (
        <div className="modal-background d-flex justify-content-center align-items-center"
             onClick={hideCallback}>


            <div className="card bg-gray-100 m-4 w-100" onClick={(e)=>{ e.preventDefault(); e.stopPropagation(); console.log("FORM CLICKED")}}
                   style={{ overflowY : "show", height: "90vh"}}
            >

                <div className="card-header">
                    <div className="row justify-content-center">
                        <div className={(editingTitle ? "d-none" : "d-flex") +  " col-12 justify-content-center"}>
                            <span title="Edit title" className="editable-text">
                                {title}  <i onClick={() => {setEditingTitle(true)}} className="editable-text-icon fa fa-edit ml-1"></i>
                            </span>
                        </div>

                        {title_render}

                    </div>
                </div>

                <div className="card-body">
                    <div className="row">

                        <div className={`col-md-2 ${showEditor ? "" : "d-none"}`}>
                            Language
                            <SelectField values={syntaxes}
                                         selectedCb={(val) => {
                                             changeLanguage(val)
                                         }}
                            maxHeight="50vh"  initIndex={initLang}  />
                        </div>
                        <div className={`col-md-2 ${showEditor ? "d-none" : ""}`}>
                            <div className="row">
                                <div className="col-12">
                                    Language
                                </div>
                                <div className="col-12 mt-2">
                                    <strong className="">Markdown</strong>
                                </div>
                            </div>


                        </div>

                        <div className="col-md-2">
                            Theme
                            <SelectField values={themes}
                                         selectedCb={(val) => {
                                             changeTheme(val)
                                         }}
                                         maxHeight="50vh" initIndex={initTheme}/>
                        </div>

                        <div className="col-md-4 offset-md-4">



                            <button type="button" className={`btn btn-primary btn-icon-split mb-0 mt-3 float-right ${text.length ? "" : "disabled"} `}
                                onClick={store}
                            >
                                <span className="text">Add a program</span>
                                <span className="icon text-white-50">
                                    <i className="fas fa-arrow-right"></i>
                                 </span>
                            </button>

                            <button type="button" className="btn btn-secondary btn-icon-split mb-0 mt-3 mr-2 float-right"  onClick={() =>
                            {
                                setShowEditor(!showEditor)
                                descriptionEditor.resize()

                            }}>
                                <span className="text">{`Edit ${showEditor ? "Description" : "Code"}`}</span>
                                <span className="icon text-white-50">
                                <i className={showEditor ? "fas fa-edit" : "fas fa-code"}></i>
                            </span>
                            </button>



                        </div>
                    </div>


                </div>
                <div className={`card-footer h-100 ${!showEditor ? "d-none" : ""}`}>
                    <div id="editor">

                    </div>
                </div>
                <div className={`card-footer h-100 ${!showEditor ? "d-flex" : "d-none"}`}>
                    <div id="descriptionEditor" className="col h-100 m-0">

                    </div>
                    <div id="descriptionOutput" className="col h-100 m-0" dangerouslySetInnerHTML={{__html: mdParser.render(descriptionText ==  null ? '' : ('' + descriptionText))}}>

                    </div>
                </div>

            </div>

        </div>

    )


}

export default NewProgram

