@if (session()->has('success'))

    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed" style="font-family: 'shrikhand', serif; font-weight:100; background-color: #371f15; color: white; padding: 15px; border-radius: 0.5rem; bottom: 3rem; right: 3rem; font-size: 0.875rem;">
    
        <p>{{ session('success') }}</p>
        
    </div>

@endif

