import React from 'react'

class SelectField extends React.Component{

    constructor(props){

        super(props)

        let real_val
        let label

        //
        if(props.values.length){

            real_val = typeof props.values[0] === "string" ? props.values[0] : props.values[0].value
            label =  props.values[0].label !== undefined ? props.values[0].label : props.values[0]
        }
        else
        {
            real_val = null
            label = null
        }

        this.state = {
            val : real_val,
            label : label,
            options : props.values,
            hover_index : null,
            open : false
        }

        this.oKU = this.oKU.bind(this)
        this.toggle_select_button = this.toggle_select_button.bind(this)
        this.select_option = this.select_option.bind(this)
        this.oB = this.oB.bind(this)
    }

    componentDidMount(){
        this.select_option(0)
    }



    toggle_select_button(){

        let open = this.state.open;
        this.setState({open : !open})
    }

    select_option(index){

        let real_val = typeof this.props.values[index] === "string" ? this.props.values[index] : this.props.values[index].value
        let label = typeof this.props.values[index] === "string" ? this.props.values[index] : typeof this.props.values[index].label!="undefined" ? this.props.values[index].label  : this.props.values[index].value


        this.setState({val : real_val, label : label, open : false, hover_index : index})

        if(this.props.selectedCb!== undefined)
            this.props.selectedCb(real_val)
    }

    oB(){
        this.setState({open : false})
    }

    oKU(event){
        // console.log(event.key)
        switch (event.key){

            case "ArrowDown":

                let idx = this.state.hover_index === null
                    ? 0
                    : (this.state.hover_index + 1) % this.state.options.length

                this.setState({
                    open : true,
                    hover_index : idx,
                })

                break

            case "ArrowUp" :
                if(this.state.open)
                {
                    let idx = this.state.hover_index === 0
                        ? (this.state.options.length - 1)
                        : Math.abs(this.state.hover_index - 1) % this.state.options.length

                    this.setState({
                        hover_index : idx,
                    })
                }
                break

            case "Enter" :
                if(this.state.open && this.state.hover_index != null)
                    this.select_option(this.state.hover_index)
                else if(!this.state.open)
                    this.setState({open : true})
                break

            case "Escape" :
                console.log("Escape")
                if(this.state.open)
                    this.setState({open : false})
                break

            case "Tab" :
                if(!this.state.open)
                    this.setState({open : true})

        }
    }

    render(){

        const list_items_render = [];
        const overflow_y = this.props.maxHeight==undefined ? "default" : "scroll";
        const max_height = this.props.maxHeight==undefined ? "default" : this.props.maxHeight

        let me = this

        this.state.options.forEach((element,index) => {

            let render =
                typeof element === 'string'
                    ?
                    element
                    :
                    // <React.Fragment>
                    <div className="w-100 h-100 d-flex align-items-center">
                        <div className="d-flex justify-content-center align-items-center" style={{width : "1em", height: "1em" }}>
                            <i className={" m-auto " + element.icon + (element.color!==undefined ?' text-'+element.color : '')}></i>
                        </div>
                        <span className="ml-2">{typeof element.label !== "undefined" ? element.label : element.value}</span>
                    </div>
            // </React.Fragment>



            list_items_render.push(
                <div key={index}
                     className={ me.state.hover_index == index ? "bg-primary list-group-item" : "list-group-item"}
                     style={{cursor : "pointer"}}
                     onMouseOver={()=> me.setState({hover_index: index}) }
                     onClick={(e)=>{
                         e.stopPropagation()
                         me.select_option(index)
                     }}
                >
                    {render}

                </div>
            )
        });

        return(
            <div className="w-100" style={{maxHeight : "2rem"}}>
                <div className="input-group select-field" onClick={(e) =>{e.stopPropagation(); this.toggle_select_button()}}>
                    <input className="form-control" type="text" style={{cursor: "pointer"}}
                           value={this.state.label!==undefined ? this.state.label : this.state.val}
                           onKeyUp={(e) =>{e.preventDefault(); me.oKU(e)}}
                           onBlur={(e)=>{
                               console.log("BLUR")
                               setTimeout(()=>{ me.setState({open : false})}, 100)

                           }}
                    />
                    <div className="input-group-append" style={{cursor : "pointer"}}>
                        <div className="input-group-text">
                            <i className="fas fa-angle-down"></i>
                        </div>
                    </div>

                </div>
                <div className={this.state.open? "list-group select-field-list" : "d-none select-field-list"}
                     style={{overflowY :   overflow_y, maxHeight : max_height}}
                >
                    {list_items_render}
                </div>
                <div className={this.state.open ? "select-field-background" : "d-none"} onClick={(e)=>{this.setState({open : false})}}></div>

            </div>
        )

    }


}

export default SelectField




