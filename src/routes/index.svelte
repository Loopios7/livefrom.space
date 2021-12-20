<script lang="ts" context="module">
	import * as db from '$lib/db';
</script>

<script lang="ts">
	import { user, auth } from '$lib/db';
</script>

<main>
	{#if $user}
		<p>You are signed in as {$user.email}</p>
		<p>You are signed in as {$user.role}</p>
		<button on:click={() => auth.signOut()}>Sign out</button>
	{:else}
		<nav>
			<a href="/sign-in">Sign in</a>
		</nav>
	{/if}
</main>
