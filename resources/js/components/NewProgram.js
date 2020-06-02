import React, {Fragment, useState} from 'react'
import ReactDOM from 'react-dom'

function NewProgram(props){


    return (
        <div className="modal-background d-flex justify-content-center align-items-center"
             onClick={(e) =>{
                 e.stopPropagation()
                 if(props.hideCallback != undefined)
                     props.hideCallback()
             }}
        >


            <form className="card bg-gray-100 w-100 m-4" onClick={(e)=>{ e.stopPropagation(); console.log("FORM CLICKED")}}
                  style={{ overflowY : "show", maxHeight: "90%"}}
            >
                <div className="card-body">
                    <input type="text"></input>
                </div>

            </form>

        </div>

    )


}

export default NewProgram

