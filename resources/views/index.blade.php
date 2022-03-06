@extends('layouts.frontend-app')

@section('content')
    <div class="flex flex-col p-3 hidden md:block dark:bg-back-dark">
        <div class="bg-white rounded-lg  border border-bg-border dark:bg-back-dark shadow-md p-4">
            <div class="flex items-center p-5 ">
                <img class="w-12 h-12 rounded-full "
                     src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                     alt="Bonnie image"/>
                <span class="text-sm text-gray-500 dark:text-tx-dark font-bold ml-4">Samim Özcan</span>
            </div>
        </div>
    </div>
    <div class="flex flex-col p-3">
        <div class="bg-white dark:bg-back-dark  rounded-lg mx-4 md:mx-auto max-w-md md:max-w-2xl mb-5 border-b border-bg-border">
            <div class="flex">
                <div class="m-2 w-10 py-1">
                    <img class="inline-block h-10 w-10 rounded-full"
                         src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt=""/>
                </div>
                <div class="flex-1 px-2 pt-2 mt-2">
                        <textarea class=" bg-transparent text-gray-400 font-medium text-lg w-full" rows="2" cols="50"
                                  placeholder="What's happening?"></textarea>
                </div>
            </div>
            <div class="flex">
                <div class="px-2">
                    <div class="flex items-center">
                        <div class="flex-1 text-center px-1 py-1 m-2">
                            <label
                                class="mt-1 cursor-pointer group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                     stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <input type="file" name="file" class="opacity-0 w-0">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex-1">
                    <button
                        class="bg-blue-400 mt-5 hover:bg-blue-600 text-white font-bold py-2 px-8 rounded-full mr-8 float-right">
                        Tweet
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-back-dark rounded-lg mx-4 md:mx-auto max-w-md md:max-w-2xl mb-5 border-b border-bg-border">
            <div class="flex items-start px-4 py-6">
                <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                     src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                     alt="avatar">
                <div>
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold dark:text-tx-dark text-gray-900 -mt-1">Samim Özcan</h2>
                        <small class="text-sm text-gray-700 dark:text-tx-dark">22h ago</small>
                    </div>
                    <p class="text-gray-700 dark:text-tx-dark">Joined 12 SEP 2012. </p>
                    <p class="mt-3 text-gray-700 text-sm dark:text-tx-dark">
                        Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                    </p>
                    <div class="mt-4 flex items-center ">
                        <div class="flex mr-2 text-gray-700 text-sm mr-3 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            <span>12</span>
                        </div>
                        <div class="flex mr-2 text-gray-700 text-sm mr-8 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                            </svg>
                            <span>8</span>
                        </div>
                        <div class="flex mr-2 text-gray-700 text-sm mr-4 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            <span>share</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-back-dark rounded-lg mx-4 md:mx-auto max-w-md md:max-w-2xl mb-5 border-b border-bg-border">
            <div class="flex items-start px-4 py-6">
                <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                     src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                     alt="avatar">
                <div>
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-900 -mt-1 dark:text-tx-dark">Samim Özcan</h2>
                        <small class="text-sm text-gray-700 dark:text-tx-dark">22h ago</small>
                    </div>
                    <p class="text-gray-700 dark:text-tx-dark">Joined 12 SEP 2012. </p>
                    <p class="mt-3 text-gray-700 text-sm dark:text-tx-dark">
                        <img class="w-full mb-3 " src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                    </p>
                    <div class="mt-4 flex items-center">
                        <div class="flex mr-2 text-gray-700 text-sm mr-3 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            <span>12</span>
                        </div>
                        <div class="flex mr-2 text-gray-700 text-sm mr-8 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                            </svg>
                            <span>8</span>
                        </div>
                        <div class="flex mr-2 text-gray-700 text-sm mr-4 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            <span>share</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-back-dark rounded-lg mx-4 md:mx-auto max-w-md md:max-w-2xl mb-5 border-b border-bg-border">
            <div class="flex items-start px-4 py-6">
                <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                     src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                     alt="avatar">
                <div>
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold dark:text-tx-dark text-gray-900 -mt-1">Samim Özcan</h2>
                        <small class="text-sm text-gray-700 dark:text-tx-dark">22h ago</small>
                    </div>
                    <p class="text-gray-700 dark:text-tx-dark">Joined 12 SEP 2012. </p>
                    <p class="mt-3 text-gray-700 text-sm dark:text-tx-dark">
                        Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                    </p>
                    <div class="mt-4 flex items-center ">
                        <div class="flex mr-2 text-gray-700 text-sm mr-3 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            <span>12</span>
                        </div>
                        <div class="flex mr-2 text-gray-700 text-sm mr-8 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                            </svg>
                            <span>8</span>
                        </div>
                        <div class="flex mr-2 text-gray-700 text-sm mr-4 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            <span>share</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-back-dark rounded-lg mx-4 md:mx-auto max-w-md md:max-w-2xl mb-5 border-b border-bg-border">
            <div class="flex items-start px-4 py-6">
                <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                     src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                     alt="avatar">
                <div>
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-900 -mt-1 dark:text-tx-dark">Samim Özcan</h2>
                        <small class="text-sm text-gray-700 dark:text-tx-dark">22h ago</small>
                    </div>
                    <p class="text-gray-700 dark:text-tx-dark">Joined 12 SEP 2012. </p>
                    <p class="mt-3 text-gray-700 text-sm dark:text-tx-dark">
                        <img class="w-full mb-3 " src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                    </p>
                    <div class="mt-4 flex items-center">
                        <div class="flex mr-2 text-gray-700 text-sm mr-3 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            <span>12</span>
                        </div>
                        <div class="flex mr-2 text-gray-700 text-sm mr-8 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                            </svg>
                            <span>8</span>
                        </div>
                        <div class="flex mr-2 text-gray-700 text-sm mr-4 dark:text-tx-dark">
                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            <span>share</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col p-3 hidden md:block">
        <div class="p-4 max-w-md bg-white rounded-lg border border-bg-border sm:p-8 dark:bg-back-dark">
            <div class="flex justify-between items-center mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-tx-dark">Latest Customers</h5>
                <a href="#" class="text-sm ml-5 font-medium text-blue-600 hover:underline dark:text-blue-500 dark:text-tx-dark">
                    View all
                </a>
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                     src="https://avatars.githubusercontent.com/u/45515180?v=4"
                                     alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-tx-dark">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-tx-dark">
                                    email@windster.com
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                     src="https://avatars.githubusercontent.com/u/45515180?v=4"
                                     alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-tx-dark">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-tx-dark">
                                    email@windster.com
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                     src="https://avatars.githubusercontent.com/u/45515180?v=4"
                                     alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-tx-dark">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-tx-dark">
                                    email@windster.com
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                     src="https://avatars.githubusercontent.com/u/45515180?v=4"
                                     alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-tx-dark">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-tx-dark">
                                    email@windster.com
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

@section('css')

@endsection

