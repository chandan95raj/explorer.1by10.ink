<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //index
    public function indexView()
    {
        return view('web.index');
    }

    //privacy-policy
    public function privacyPolicyView()
    {
        return view('web.privacy-policy');
    }

    //terms-conditions
    public function termsConditionsView()
    {
        return view('web.terms-conditions');
    }

    //about-us
    public function aboutView()
    {
        return view('web.about-us');
    }

    //api
    public function apiView()
    {
        return view('web.api');
    }

    //etf
    public function etfView()
    {
        return view('web.etf');
    }

    //architecture
    public function architectureView()
    {
        return view('web.architecture');
    }

    //blockchain/nodes
    public function blockNodesView()
    {
        return view('web.nodes');
    }

    //blockchain/blocks
    public function blockBlocksView()
    {
        return view('web.blocks');
    }

    //blockchain/accounts
    public function blockAccountsView()
    {
        return view('web.accounts');
    }

    //blockchain/contracts
    public function blockContractsView()
    {
        return view('web.contracts');
    }

    //blockchain/transfers
    public function blockTransfersView()
    {
        return view('web.transfers');
    }

    //blockchain/transactions
    public function blockTransView()
    {
        return view('web.transactions');
    }

    //advertise
    public function advertiseView()
    {
        return view('web.advertise');
    }

    //tokens/list
    public function tokenListView()
    {
        return view('web.token-list');
    }

    //tokens/transfers
    public function tokenTransfersView()
    {
        return view('web.token-transfers');
    }

    //data/charts/1by10/supply
    public function dataSupplyView()
    {
        return view('web.1by10-supply');
    }

    //data/charts/revenue
    public function dataRevenueView()
    {
        return view('web.revenue');
    }

    //data/charts/active-accounts
    public function dataActiveAccountsView()
    {
        return view('web.active-accounts');
    }
    
    //data/charts/txn/daily-txn
    public function dataDailyTxnView()
    {
        return view('web.daily-txn');
    }
    
    //data/charts/1by10
    public function data1By10View()
    {
        return view('web.1by10');
    }
}
