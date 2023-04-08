<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="inline-flex gap-2 px-4 py-2 border-2 rounded-full border-slate-200 bg-slate-100 dark:bg-slate-600 dark:text-white focus-within:border-2 focus-within:border-slate-500">
    <label for="search-input" class="sr-only"><?php esc_html_e('Search for:', 'streamwind'); ?></label>
    <input type="text" id="search-input" class="w-24 bg-transparent focus:outline-none" placeholder="<?php esc_attr_e('Search', 'streamwind'); ?>" value="" name="search" title="<?php esc_attr_e('Search for:', 'streamwind') ?>" />
    <button type="submit" class="focus:outline-none group">
        <span class="sr-only"><?php esc_html_e('Start search', 'streamwind'); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 group-focus:hidden" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
            <path d="M21 21l-6 -6"></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="hidden h-6 group-focus:block" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
            <path d="M21 21l-6 -6"></path>
            <path d="M10 13v.01"></path>
            <path d="M10 7v3"></path>
        </svg>
    </button>
</form>