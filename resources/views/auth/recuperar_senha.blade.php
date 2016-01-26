
    @extends('store.store')

    @section('content')
        <div class="row">
            <div class="col-sm-5 col-lg-offset-3">
                <form name="recuperar_senha">
                    <div class="form-inline">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="senha" id="senha"/>
                        <button name="recuperar" id="recuperar" class="btn btn-default pull-right ">Ennviar </button>
                    </div>

                </form>
            </div>
        </div>
        <br/>
    @stop

