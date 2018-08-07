<?=$form->getSuccessScript()?>
<script>
    window.laravelFormCreate{{ isset($id) ? "_$id" : '' }} = window.laravelFormBuilder({
        rule:{!! json_encode($form->getRules()) !!},
        form:{!! json_encode($form->getConfig('form')) !!},
        row:{!! json_encode($form->getConfig('row')) !!},
        action:'{{$form->getAction()}}',
        method:'{{$form->getMethod()}}'
    });
</script>