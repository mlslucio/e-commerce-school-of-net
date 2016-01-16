@extends('store.store')

@section('cat')
    @include('store.partial.categories')
@stop

    @section('sidebar')

        @parent

    @endsection

    @section('content')
        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Em destaque</h2>

                    @include('store.partial.product',['products'=>$productFeatured]);

            </div><!--features_items-->



            <div class="features_items"><!--recommended-->
                <h2 class="title text-center">Recomendados</h2>

                @include('store.partial.product',['products'=>$productRecommend]);

            </div><!--recommended-->

        </div>

        </div>
        </div>
        <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <ul class="list-inline item-details">
                    <li><a href="http://themifycloud.com">ThemifyCloud</a></li>
                    <li><a href="http://themescloud.org">ThemesCloud</a></li>
                </ul>
            </div>
        </div>
        </section>
@stop
