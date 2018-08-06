<script>
    window.laravelFormCreate = window.laravelFormBuilder({
        rule:{{ json_encode($form->rule) }},
        form:{{ json_encode($form->getConfig('form')) }},
        row:{{ json_encode($form->getConfig('row')) }},
        action:'{{$form->getAction()}}',
        method:'{{$form->getMethod()}}'
    })
</script>