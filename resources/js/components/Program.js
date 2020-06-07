import React, {useState, useEffect} from 'react'
import SelectField from "./atomic/SelectField";



function Program(props){

    const [editor, setEditor] = useState(null)


    const helperGetProgramName = (program) => {

        let lang = program.language
        let jang = []

        lang = lang.replace('_', ' ')

        //special handling for c/c++
        lang = lang.replace('cpp', 'c++')

        //uppercase languages (should do this on front end)
        lang.split(" ").forEach((val) =>  { jang.push( val.charAt(0).toUpperCase() + val.substring(1)) })


        return jang.join(" ")
    }

    useEffect( () =>{

        if(editor == null)
        {
            let local_editor = ace.edit("editor")

            local_editor.setTheme("ace/theme/dracula")
            //local_editor.setValue(props.program.code)
            local_editor.session.setMode("ace/mode/" + props.program.language)
            setEditor(local_editor)
        }

    })

    const hideCallback = (e) =>{

        e.stopPropagation()

        if(props.hideCallback != undefined)
            props.hideCallback()
    }


    return (

        <div className="modal-background d-flex justify-content-center align-items-center"
             onClick={hideCallback}>

            <div className="card bg-gray-100 m-4" onClick={(e)=>{ e.preventDefault(); e.stopPropagation();}}
                 style={{ overflowY : "show", height: "90vh", minWidth : "33vw"}}
            >

                <div className="card-header">
                    <div className="row justify-content-center">
                        {props.program.title}
                    </div>
                </div>

                <div className="card-body">
                    <div className="row">

                        <div className="col-12">
                            Language <br/>
                            {helperGetProgramName(props.program)}
                        </div>
                        <div className="col-12">
                            Description <br />
                            {props.program.description}
                        </div>
                    </div>
                </div>

                <div className="card-footer h-100">
                    <div id="editor">
                        {props.program.code}
                    </div>
                </div>
            </div>


        </div>

    )
}

export default Program
