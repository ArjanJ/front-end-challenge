import React, { Component } from 'react';
import FilterItem from './FilterItem';
/**
 * Holds all transactions and filters them as needed.
 */
class FilterList extends Component {

    /**
     * Data: {title, subtitle, id, selected}
     * @param props
     */
    constructor(props) {
        super(props);
        this.state = {
            type:'',
            data:[],
            selected: new Set(),
            multi:false
        };
        this.isEmpty = this.isEmpty.bind(this);
        this.renderItems = this.renderItems.bind(this);
        this.handleSelectChange = this.handleSelectChange.bind(this);
    }

    componentDidMount() {
        this.setState({
            type:this.props.type,
            data:this.props.data,
            selected:this.props.selected,
            multi:this.props.multi
        })
    }

    componentWillReceiveProps(nextProps, prevState) {
        this.setState({
            type:nextProps.type,
            data:nextProps.data,
            selected:nextProps.selected,
            multi:nextProps.multi
        });
    }

    handleSelectChange(data, selected) {
        let replacement = new Set();
        if(selected) {
            replacement.add(data.id);
        }
        if(this.state.multi) { //cannot have multiple selected
            for(let item of this.state.selected.values()) {
                replacement.add(item); //copy set
            }
            if(!selected) {
                replacement.delete(data.id);
            }
        }
        this.setState({
            selected:replacement
        }, this.props.onSelected(this.state.type,replacement));
    }

    isEmpty(obj) {
        return obj == undefined || (Array.isArray(obj) && obj.length == 0) || Object.keys(obj).length == 0 ;
    }

    renderItems() {
        if(this.isEmpty(this.state.data) || this.state.selected == undefined) {
            return (<div>empty</div>);
        }
        let items = [];
        for(let item of this.state.data) {
            items.push(<FilterItem key={'filter-'+this.state.type+'-'+item.id}
                                   data={item}
                                   selected={this.state.selected.has(item.id)}
                                   onSelected={this.handleSelectChange}/>)
        }
        return items;
    }

    render() {
        return (
            <div>
                {this.renderItems()}
            </div>
        );
    }
}

export default FilterList;
