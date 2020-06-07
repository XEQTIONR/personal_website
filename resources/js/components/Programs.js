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

                <div className="col-12 col-sm-6 col-md-4 col-xl-3 my-2" key={programs[i].id}>
                    <div className="card  shadow h-100 py-2">
                        <div className="card-body">
                            <div className="row no-gutters align-items-center">
                                <div className="col mr-2">
                                    <div className="h5 mb-0 font-weight-bold text-gray-800">{programs[i].title}</div>
                                </div>
                                <div className="col-auto">
                                    <i className="fa fa-code fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
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


                        if(notification.status == 'success')
                        {
                            setShowModal(false)

                            let local_programs = programs

                            local_programs.push(notification.new_program)

                            setPrograms(local_programs)
                        }

                        addToast(notification.message, {appearance : notification.status, autoDismiss: true})
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
