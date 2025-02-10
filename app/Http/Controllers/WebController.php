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
}
