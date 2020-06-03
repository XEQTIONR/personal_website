import React, {Fragment, useState, useEffect} from 'react'
import SelectField from "./atomic/SelectField";

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

    let content = <React.Fragment>
        <div className="row mb-2">
            <div className="col-md-3">
                <SelectField values={["A","B","C"]} />
            </div>
        </div>
    </React.Fragment>

    return (
        <div className="modal-background d-flex justify-content-center align-items-center"
             onClick={hideCallback}>


            <div className="card bg-gray-100 m-4 w-100" onClick={(e)=>{ e.preventDefault(); e.stopPropagation(); console.log("FORM CLICKED")}}
                  // style={{ overflowY : "show", maxHeight: "90%"}}
            >
                <div className="card-body">
                    {content}
                </div>
                <div className="card-footer">
                <div id="editor">

                </div>
                </div>

            </div>

        </div>

    )


}

export default NewProgram

