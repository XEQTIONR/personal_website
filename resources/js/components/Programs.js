import React, {Fragment, useState} from 'react'
import ReactDOM from 'react-dom'
import NewProgram from "./NewProgram";

function Programs(props){

    const [showModal, setShowModal] = useState(false)
    const [text, setText] = useState("")
    const [lang, setLang] = useState(null)
    const [theme, setTheme] = useState(null)

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


            {showModal ?
                <NewProgram hideCallback={() => {
                    setShowModal(false)
                }}
                            themeCallback={(new_theme) => {
                                setTheme(new_theme)
                            }}

                            langCallback={(new_lang) => {
                                setLang(new_lang)
                            }}

                            text={text} setText={setText} lang={lang} theme={theme}
                /> :
                ''
            }
        </Fragment>
    )

}

export default Programs

if (document.getElementById('Programs')) {
    ReactDOM.render(<Programs />, document.getElementById('Programs'));
}
