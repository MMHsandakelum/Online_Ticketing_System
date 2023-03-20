<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.index');
    }

    public function ticket_form(){
        return view('pages.create_ticket');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_ticket(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'email' => 'required',
            'problem_description' => 'required',
            'phone_number' => 'required',
        ]);

        $ticket = new Tickets;

        $ticket->customer_name = $request->customer_name;
        $ticket->email = $request->email;
        $ticket->phone_number = $request->phone_number;
        $ticket->problem_description = $request->problem_description;
        $ticket->status = "pending";

        $ticket->save();

        return redirect('/')
            ->with('success','You have successfully file uplaod.');

    }
    public function viewPendingTickets(){
        
        $tickets = Tickets::where('status','pending')->get();
        // dd($tickets);
        return view('pages.pending_tickets',compact('tickets'));
    }
    public function viewCompleteTickets(){
        
        $tickets = Tickets::where('status','completed')->get();
        // dd($tickets);
        return view('pages.complete_tickets',compact('tickets'));
    }

   
    public function viewAndReplyTicket($id)
    {
        // dd($id);
        $ticket_data = Tickets::where('id',$id)->first();
        return view('pages.view_and_reply',compact('ticket_data'));
    }

    public function reply(Request $request,$id){
        $agent_name = $request->agent_name;
        $reply = $request->reply;
        // dd($request->ref_id);
        Tickets::where('id',$id)->update(['response'=> $reply]);
        Tickets::where('id',$id)->update(['agent_name'=>$agent_name]);
        Tickets::where('id',$id)->update(['status'=>"completed"]);
        return redirect('/home');

    }

    public function searchView(){
        return view('pages.search_by_reference');
    }


    public function searchByReference(Request $request){

        $search = $request->search;

        $searchresult = Tickets::where('id',$search)->first();
        return view('pages.search_result', compact('searchresult'));

    }

}
