import React, {Fragment, useState} from 'react'
import ReactDOM from 'react-dom'
import NewProgram from "./NewProgram";

function Programs(props){

    const [showModal, setShowModal] = useState(false)
    const [text, setText] = useState("INITIAL")


    return (

        <Fragment>
        <button type="button" className="btn btn-primary btn-icon-split btn-sm"
            onClick={() => {setShowModal(true)}}
        >
                    <span className="icon text-white-50">
                      <i className="fas fa-plus"></i>
                    </span>
            <span className="text">Add a program</span>
        </button>

        <div className="row">
            <div className="col-12">
            </div>
        </div>

        { showModal ? <NewProgram hideCallback={() =>{setShowModal(false)}} text={text} setText={setText}/> : ''}

        </Fragment>
    )

}

export default Programs

if (document.getElementById('Programs')) {
    ReactDOM.render(<Programs />, document.getElementById('Programs'));
}
