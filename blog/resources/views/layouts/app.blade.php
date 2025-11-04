@extends('layouts.master')

@push('styles')
<style>
/* Example page-specific style pushed from app.blade.php (demo) */
.site-brand { letter-spacing: -0.5px; }
</style>
@endpush

@push('scripts')
<script>
// Example page-specific script pushed from app.blade.php (demo)
console.log('app.blade.php example script loaded');
// You can safely remove these example pushes in production.
</script>
@endpush
