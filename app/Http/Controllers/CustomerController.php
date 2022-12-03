<?php
namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customer = Customer::all();

        return view('customers.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      

        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'status' => 'required',

        ]);        

        $customer = new Customer; 
        $customer->nombre = $request->input('nombre');
        $customer->apellido = $request->input('apellido');
        $customer->cedula = $request->input('cedula');
        $customer->direccion = $request->input('direccion');
        $customer->telefono = $request->input('telefono');
        $customer->status = $request->input('status');
 
        $customer->save();
        return redirect('home');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $customer=Customer::findOrFail($id);

      return view('customers.edit', compact('customer'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $customer = Customer::findOrFail($id);

        $customer->nombre = $request->input('nombre');
        $customer->apellido = $request->input('apellido');
        $customer->cedula = $request->input('cedula');
        $customer->telefono = $request->input('telefono');
        $customer->direccion = $request->input('direccion');
        $customer->status = $request->input('status');

        $customer->save();
        return redirect('home');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
        {       
       $customer->delete();
       return redirect('home');
    }
}
