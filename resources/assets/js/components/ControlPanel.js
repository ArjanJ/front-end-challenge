import React, { Component } from 'react';

/**
 * Side located control panel that shows category and account options.
 */
class ControlPanel extends Component {

    constructor(props) {
        super(props); //don't actually need state probably
        //TODO search bar for categories
        //TODO display accounts
    }

    componentDidMount() {
    }
    componentDidUpdate() {
    }

    render() {
        return (
            <div className="panel">
                <div className="panel-heading">Control Panel</div>
                <div className="panel-body">
                    <div className="list-group">
                        <div className="list-group-heading">Categories</div>
                        <div className="list-group-item"></div>
                        <div className="list-group-heading">Accounts</div>
                        <div className="list-group-item"></div>
                    </div>
                </div>
            </div>
        );
    }
}

export default ControlPanel;
