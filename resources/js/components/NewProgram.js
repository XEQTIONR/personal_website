import React, {Fragment, useState, useEffect} from 'react'
import ReactDOM from 'react-dom'

function NewProgram(props){

    const [editor, setEditor] = useState(null);

    useEffect(() => {

        if(editor == null)
        {
            let editor = ace.edit("editor")
            editor.setTheme("ace/theme/dracula")
           editor.session.setMode("ace/mode/javascript")

            if(props.text == null)
                editor.setValue("HELLO WORLD")
            else
                editor.setValue(props.text)


            setEditor(editor)
        }
        else
            editor.focus()

    })


    const hideCallback = (e) =>{

        e.stopPropagation()

        if(props.setText!= undefined && editor != null)
            props.setText(editor.getValue())

        if(props.hideCallback != undefined)
            props.hideCallback()
    }

    return (
        <div className="modal-background d-flex justify-content-center align-items-center"
             onClick={hideCallback}>


            <form className="card bg-gray-100 m-4 w-100 h-50" onClick={(e)=>{ e.stopPropagation(); console.log("FORM CLICKED")}}
                  style={{ overflowY : "show", maxHeight: "90%"}}
            >
                <span id="editor" className="card-body" onChange={(e) => {console.log('change')}}>

                </span>

            </form>

        </div>

    )


}

export default NewProgram

