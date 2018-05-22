@extends('parent')

@section('content')
    <center>
        <form method="POST" action="" name="myForm">
            {{ csrf_field() }}
            <h4>Trajet</h4>
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <select id="dep" name="dep" class="form-control">
                            <option value="tn">Tunis</option>
                            <option value="sf">Sfax</option>
                            <option value="nb">Nabeul/Cap Bon</option>
                            <option value="mn">Monastir/Sousse</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <select id="arr" name="arr" class="form-control">
                            <option value="tn">Tunis</option>
                            <option value="sf">Sfax</option>
                            <option value="nb">Nabeul/Cap Bon</option>
                            <option value="mn">Monastir/Sousse</option>
                        </select>
                    </div>
                </div>
            </div>
            <h4>Période</h4>
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <input name="debut" type="datetime-local" class="form-control" class="col-xs-6">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <input name="fin" type="datetime-local" class="form-control" class="col-xs-6">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <select name="sel" type="time" class="form-control" class="col-xs-6">
                    <option value="prop">Je Propose</option>
                    <option value="cher">Je Cherche</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default fbutton">Submit</button>
        </form>
    </center>

@endsection

<script>

</script>