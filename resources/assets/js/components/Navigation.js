import React, { Component } from 'react';

/**
 * Top bar, mainly for aesthetics but potentially to intro actual nav at some point.
 */
class Navigation extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <nav className="navbar navbar-default navbar-static-top">
                <div className="container">
                    <div className="navbar-header">
                        <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span className="sr-only">Toggle navigation</span>
                            <span className="icon-bar"></span>
                            <span className="icon-bar"></span>
                            <span className="icon-bar"></span>
                        </button>
                        <a className="navbar-brand" href="/">Transactions</a>
                    </div>
                    <div id="navbar" className="navbar-collapse collapse">
                        <ul className="nav navbar-nav navbar-right">
                            <li><a><span style={{paddingTop:"4px"}} className="glyphicon glyphicon-cog"></span></a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>);
    }
}

export default Navigation;
