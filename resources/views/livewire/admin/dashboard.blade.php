<div class="p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <!-- Stat Cards -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <i class="fas fa-users text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Users</p>
                    <p class="text-2xl font-semibold text-gray-800">1,256</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600">
                    <i class="fas fa-shopping-cart text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Orders</p>
                    <p class="text-2xl font-semibold text-gray-800">542</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                    <i class="fas fa-box text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Products</p>
                    <p class="text-2xl font-semibold text-gray-800">1,089</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-red-100 text-red-600">
                    <i class="fas fa-dollar-sign text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Revenue</p>
                    <p class="text-2xl font-semibold text-gray-800">$24,780</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Recent Orders</h2>
            <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-1234</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">John Smith</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-15</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$125.00</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-1233</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Sarah Johnson</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-14</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$89.50</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Processing</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-1232</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Michael Brown</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-13</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$245.75</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Shipped</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h2>
            <div class="space-y-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/1.jpg" alt="User">
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Lisa Johnson</p>
                        <p class="text-sm text-gray-500">Added a new product "Wireless Headphones"</p>
                        <p class="text-xs text-gray-400">2 hours ago</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/2.jpg" alt="User">
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Robert Davis</p>
                        <p class="text-sm text-gray-500">Updated the pricing for all products</p>
                        <p class="text-xs text-gray-400">5 hours ago</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/2.jpg" alt="User">
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Emily Wilson</p>
                        <p class="text-sm text-gray-500">Processed 15 new orders</p>
                        <p class="text-xs text-gray-400">1 day ago</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Quick Stats</h2>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-blue-50 rounded-lg p-4">
                    <p class="text-sm font-medium text-blue-800">New Users</p>
                    <p class="text-2xl font-bold text-blue-600">24</p>
                    <p class="text-xs text-blue-500">+12% from last week</p>
                </div>
                <div class="bg-green-50 rounded-lg p-4">
                    <p class="text-sm font-medium text-green-800">Sales</p>
                    <p class="text-2xl font-bold text-green-600">$3,450</p>
                    <p class="text-xs text-green-500">+8% from last week</p>
                </div>
                <div class="bg-yellow-50 rounded-lg p-4">
                    <p class="text-sm font-medium text-yellow-800">Pending Orders</p>
                    <p class="text-2xl font-bold text-yellow-600">18</p>
                    <p class="text-xs text-yellow-500">-3 from last week</p>
                </div>
                <div class="bg-purple-50 rounded-lg p-4">
                    <p class="text-sm font-medium text-purple-800">Support Tickets</p>
                    <p class="text-2xl font-bold text-purple-600">7</p>
                    <p class="text-xs text-purple-500">+2 from last week</p>
                </div>
            </div>
        </div>
    </div>
</div>