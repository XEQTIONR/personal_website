import React, {Fragment, useState, useEffect} from 'react'
import SelectField from "./atomic/SelectField";

function NewProgram(props){

    const [editor, setEditor] = useState(null)
    const [text, setText] = useState(props.text)
    const [themes, setThemes] = useState(editor_themes.map( (atheme) =>{ return  {value: atheme.theme_id, label: atheme.name }}))
    const [syntaxes, setSyntaxes] = useState(editor_syntaxes.map( (language) =>{ return  {value: language.syntax_id, label: language.name }}))
    const [initLang, setInitLang] = useState(1)
    const [initTheme, setInitTheme] = useState(1)

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



            // local_editor.session.setMode( (props.theme && props.theme !=null)
            //                                 ? (props.theme)
            //                                 : "ace/mode/javascript")


            local_editor.session.setMode("ace/mode/javascript")



            local_editor.session.on('change', () =>  { setText(local_editor.getValue())})

            if(props.text == null)
                local_editor.setValue("")
            else
                local_editor.setValue(props.text)


            setEditor(local_editor)

        }
        else{
            editor.resize()
            editor.focus()

                let default_lang_name =  'Javascript'

                let default_lang = syntaxes.find((lang, index) => {

                    if(lang.name ==   default_lang_name){
                            setInitLang(index)
                            return true
                    }

                    return false

                })


        }

    })

    const changeTheme = (theme) =>{

        if(editor != null)
        {
            editor.setTheme(theme)

            if(props.themeCallback != undefined)
                props.themeCallback(theme)
        }

    }

    const changeLanguage = (lang) => {
        if(editor != null)
            editor.session.setMode(lang)
    }


    const hideCallback = (e) =>{

        e.stopPropagation()

        if(props.setText!= undefined && editor != null)
            props.setText(editor.getValue())

        if(props.hideCallback != undefined)
            props.hideCallback()
    }

    let render = text.length ?
        <button type="button" className="btn btn-primary btn-icon-split">
            <span className="text">Add a program</span>
            <span className="icon text-white-50">
                <i className="fas fa-arrow-right"></i>
            </span>
        </button> : ""

    return (
        <div className="modal-background d-flex justify-content-center align-items-center"
             onClick={hideCallback}>


            <div className="card bg-gray-100 m-4 w-100" onClick={(e)=>{ e.preventDefault(); e.stopPropagation(); console.log("FORM CLICKED")}}
                   style={{ overflowY : "show", height: "90vh"}}
            >
                <div className="card-body">
                    <div className="row">
                        <div className="col-md-3">
                            <SelectField values={themes}
                            selectedCb={(val) => {
                                changeTheme(val)
                            }}
                            maxHeight="50vh" initIndex={initTheme}/>
                        </div>

                        <div className="col-md-3">
                            <SelectField values={syntaxes}
                                         selectedCb={(val) => {
                                             changeLanguage(val)
                                         }}
                            maxHeight="50vh"  initIndex={initLang}  />
                        </div>
                        <div className="col-md-3 offset-md-3 d-flex justify-content-end">

                            {render}
                        </div>
                    </div>


                </div>
                <div className="card-footer h-100">
                    <div id="editor">

                    </div>
                </div>

            </div>

        </div>

    )


}

export default NewProgram

