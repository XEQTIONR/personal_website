import React, {Fragment, useState, useEffect} from 'react'
import SelectField from "./atomic/SelectField";

function NewProgram(props){

    const [editor, setEditor] = useState(null);
    const [text, setText] = useState(props.text);
    const [themes, setThemes] = useState(editor_themes)
    //const [themes, setThemes] = useState(editor_themes.map( (atheme) =>{ return  {value: atheme.theme_id, label: atheme.name }}))

    useEffect(() => {

        if(editor == null)
        {
            let editor = ace.edit("editor")
            editor.setTheme("ace/theme/dracula")
           editor.session.setMode("ace/mode/javascript")
           editor.session.on('change', () =>  { setText(editor.getValue())})

            if(props.text == null)
                editor.setValue("")
            else
                editor.setValue(props.text)


            setEditor(editor)

        }
        else{
            editor.resize()
            editor.focus()
        }

    })


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
                            <SelectField values={
                                themes.map( (atheme) =>{ return  {value: atheme.theme_id, label: atheme.name }})
                            } />
                        </div>
                        <div className="col-md-3 offset-md-6 d-flex justify-content-end">

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

