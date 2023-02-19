
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                      </div>
</br></br>
                <div class="card-body">
                    <table id="datatable" style="border-style: groove;">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>model</th>
                            <th>number</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($autos as $auto)
                        <tr>
                            <td style="border-style: groove;">{{ $auto->id }}</td>
                            <td style="border-style: groove;">{{ $auto->model }}</td>
                            <td style="border-style: groove;">{{ $auto->number }}</td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
</div> 
</br></br>
                <div>
                    <form method="post" action="{{route('store')}}">
                    @csrf
                        <label for="model-input">model</label>
                        <input type="text" name="model" id="model-input">
                                     
                        <label for="number-input" >number</label>
                        <input type="text" name="number" id="number-input">

                        <button type="submit">Submit</button>
                    </form>
                </div>
