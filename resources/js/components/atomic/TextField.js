
import React, {Component} from 'react';

class TextField extends Component {

    constructor(props){
        super(props);
        this.state = {val : props.val};

        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(e){
        e.preventDefault();

        //set internal state
        this.setState({val : e.target.value});

        //call to change callback
        this.props.change(e.target.value);
    }

    render() {

        let classes = (this.props.className != undefined) ? this.props.className : ''

        return (
            <input className={"form-control " + classes}
                   type={this.props.type !== undefined ? this.props.type : 'text'}
                   value={this.state.val} onChange={ (event) => this.handleChange(event)}
                   placeholder={this.props.placeholder} />
        )

    }

}


export default  TextField;
