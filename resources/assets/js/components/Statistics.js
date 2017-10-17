import React, { Component } from 'react';
import {Doughnut} from 'react-chartjs-2';
/**
 * Top bar, mainly for aesthetics but potentially to intro actual nav.
 */
class Statistics extends Component {

    constructor(props) {
        super(props);
        this.state = {
            sums:[],
            categories:[]
        };
        this.updateIncomeVsOutcome = this.updateIncomeVsOutcome.bind(this);
    }

    componentDidMount() {
        if(this.props.transactions) {
            this.updateIncomeVsOutcome(this.props.transactions)
        }
    }

    componentWillReceiveProps(nextProps, prevState) {
        this.updateIncomeVsOutcome(nextProps.transactions)
    }

    updateIncomeVsOutcome(transactions) {
        let sums = [];

        if(transactions != undefined) {
            transactions.map(transaction => {
                let category = transaction.category != undefined ? transaction.category : 'none';
                let exists = sums.find(obj => {
                    return obj.category == category;
                });
                if(exists) {
                    exists.sum += transaction.amount;
                } else {
                    sums.push({category:category, sum:transaction.amount});
                }
            });
        }
        //TODO sort top five categoires
        sums.sort((a,b) => {
            return a.sum - b.sum;
        });
        let amounts = [];
        let categories = [];
        for(let i in sums) {
            if(i > 4) {
                break;
            }
            let obj = sums[i];
            amounts.push(Math.abs(obj.sum).toFixed(2));
            categories.push(obj.category);
        }
        this.setState({
            sums:amounts,
            categories:categories
        });
    }

    render() {
        let data = {
            labels: this.state.categories,
            datasets: [{
                label: 'Categories',
                data: this.state.sums,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(255, 206, 86, 0.4)',
                    'rgba(75, 192, 192, 0.4)',
                    'rgba(153, 102, 255, 0.4)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            }]
        };
        let options = {
            title: {
                display:true,
                text:'Top spending categories based on current selections'
            },
            legend: {
                display:false
            }
        };

        return (
            <div className="panel dashboard-section">
                <div className="panel-heading">
                    <h3>Overview</h3>
                </div>
                <div className="panel-body">
                    <Doughnut data={data} options={options} />
                </div>
            </div>
        );
    }
}

export default Statistics;
