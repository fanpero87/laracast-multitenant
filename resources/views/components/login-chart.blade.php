<div x-data="{chart: null}" x-init="chart = new Chartisan({
        el: '#login-chart',
        url: '@chart('login_chart')',
        hooks: new ChartisanHooks()
            .datasets('line')
            .tooltip()
            .legend(),
        });" class="mt-4 overflow-hidden bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 bg-white border-b border-gray-200 sm:px-6">
        <div class="flex flex-wrap items-center justify-between -mt-4 -ml-4 sm:flex-no-wrap">
            <div class="mt-4 ml-4">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Logins Last 3 Hours
                </h3>
            </div>
            <div class="flex-shrink-0 mt-4 ml-4">
                <span class="inline-flex rounded-md shadow-sm">
                    <button x-on:click="chart.update({ background: true })" type="button"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                        <svg class="w-6 h-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div class="p-10">
        <div id="login-chart" style="height: 300px;"></div>
    </div>
</div>

@push('scripts')
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
@endpush
