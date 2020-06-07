import React, {Fragment, useState} from 'react'
import ReactDOM from 'react-dom'
import NewProgram from "./NewProgram";

import {ToastProvider, useToasts} from 'react-toast-notifications'

function Programs(){




    const MainComponent = () => {

        const { addToast } = useToasts()

        const [showModal, setShowModal] = useState(false)
        const [text, setText] = useState("")
        const [lang, setLang] = useState(null)
        const [theme, setTheme] = useState(null)
        const [programs, setPrograms] = useState(my_programs)


        let programs_render = []


        for(var i=0; i<programs.length; i++)
        {
            let program_render =

                <div className="col-12 col-sm-4 col-md-3 col-xl-2 my-2">
                    <div className="card">
                        <div className="card-body">
                            <h3 className="text-center my-4">
                                <i className="fa fa-code"></i>
                            </h3>
                        </div>


                    </div>
                    <h6 className="text-center mt-2">{programs[i].title}</h6>

                </div>

            programs_render.push(program_render)
        }


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

                <div className="row mt-3">
                    {programs_render}
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

                    toasterCallback={(notification) => {
                        addToast(notification.message, {appearance : notification.status})

                        if(notification.status == 'success')
                            setShowModal(false)
                    }}

                    text={text} setText={setText} lang={lang} theme={theme}
                    /> :
                    ''
                }
            </Fragment>
        )

    }

    return(
        <ToastProvider>
            <MainComponent/>
        </ToastProvider>
    )




}

export default Programs

if (document.getElementById('Programs')) {
    ReactDOM.render(<Programs />, document.getElementById('Programs'));
}
