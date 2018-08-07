@if($form->isLoadCityData())
    <script type="text/javascript" src="{{ asset('vendor/form-create/province_city.js') }}"></script>
@endif
@if($form->isLoadCityAreaData())
    <script type="text/javascript" src="{{ asset('vendor/form-create/province_city_area.js') }}"></script>
@endif
<?=$form->getSuccessScript()?>
<script>
    window.laravelFormCreate{{ isset($id) ? "_$id" : '' }} = window.laravelFormBuilder({
        rule : {!! json_encode($form->getRules()) !!},
        form : {!! json_encode($form->getConfig('form')) !!},
        row : {!! json_encode($form->getConfig('row')) !!},
        action : '{{$form->getAction()}}',
        method : '{{$form->getMethod()}}'
    });
</script>