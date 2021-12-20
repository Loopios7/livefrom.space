
<svelte:head>
    <title>{$page.params.param1}</title>
</svelte:head>

<script>
    import { page } from '$app/stores';
</script>


<h1><span class="text-error">{$page.params.param1}</span> /// <span class="text-success">{$page.params.param2}</span></h1>
