<!DOCTYPE html>
<html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  class="scroll-smooth transition-colors duration-500 ease-in-out">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <title>@yield('title', config('app.name'))</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
    <script>
      const setThemes = () => {
        const theme = localStorage.getItem('theme');
        if (theme) {
          document.documentElement.setAttribute('data-theme', theme);
        } else {
          // Jika tidak ada tema di localStorage, ikuti preferensi sistem operasi
          if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-theme', 'dark');
          } else {
            document.documentElement.setAttribute('data-theme', 'light');
          }
        }
      };
      setThemes();
      window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setThemes);
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="font-sans antialiased">
    <div class="min-h-screen p-6">
      <div class="flex gap-2">
        <div class="flex h-64 w-80 rounded-xl bg-base-200">
          <div class="dropdown m-auto">
            <div tabindex="0" role="button" class="btn m-1 bg-base-100 hover:border-base-200 hover:bg-base-content/10">
              Theme
              <svg
                width="12px"
                height="12px"
                class="inline-block h-2 w-2 fill-current opacity-60"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 2048 2048">
                <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
              </svg>
            </div>
            <ul
              x-data="{theme: localStorage.getItem('theme') || ''}"
              tabindex="0"
              class="dropdown-content z-[1] min-w-52 rounded-box bg-base-100 p-2 shadow-2xl">
              <li>
                <label
                  x-data="{
                    setTheme(mode) {
                      this.theme = mode
                      if (mode === 'default') {
                        window.matchMedia('(prefers-color-scheme: dark)').matches ? document.documentElement.setAttribute('data-theme', 'dark') : document.documentElement.setAttribute('data-theme', 'light');
                        localStorage.removeItem('theme');
                      }
                      setThemes();
                    },
                  }"
                  class="inline-flex w-full cursor-pointer items-center justify-start rounded-lg border border-transparent p-2 hover:bg-base-content/10 has-[:checked]:border-primary has-[:checked]:bg-primary/5 has-[:checked]:font-bold has-[:checked]:text-indigo-900 has-[:checked]:transition-all has-[:checked]:duration-500 [&_p]:has-[:checked]:translate-y-0 [&_p]:has-[:checked]:opacity-100 [&_p]:has-[:checked]:transition-transform [&_p]:has-[:checked]:duration-500">
                  <div class="inline-flex w-full items-center gap-2">
                    <input
                      @click="setTheme('default')"
                      type="radio"
                      name="theme-dropdown"
                      value="default"
                      aria-label="Default"
                      :checked="theme === ''"
                      class="checked:text-indigo-500 checked:ring-0 checked:ring-current focus:ring-0 focus:ring-current" />
                    <div class="grid overflow-hidden rounded-xl">
                      <div
                        class="mockup-window col-start-1 row-start-1 w-44 rounded-xl border bg-base-300 before:-mt-4 before:mb-1 before:h-[6px] before:opacity-100 before:shadow-circle dark:border-base-content"
                        data-theme="light">
                        <div class="h-24 bg-base-200">
                          <div class="flex h-full">
                            {{-- sidebar --}}
                            <div class="flex w-11 flex-col border-r bg-base-100">
                              <div class="p-1">
                                <div class="mb-5 h-2 w-6 rounded-badge bg-base-200"></div>
                                <div class="flex flex-col gap-1">
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                </div>
                              </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                              <div class="h-3 border-b bg-base-100"></div>
                              <div class="flex h-full flex-col gap-2 p-1 pb-0">
                                <div class="flex justify-between">
                                  <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                    <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                    <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                  </div>
                                  <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                    <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                    <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                  </div>
                                  <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                    <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                    <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                  </div>
                                </div>
                                <div class="flex h-full flex-col gap-1 rounded-t-md bg-base-100 p-2">
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                  <div class="w-15 h-2 rounded-badge bg-base-200"></div>
                                  <div class="w-15 h-2 rounded-badge bg-base-200"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="wave-clip mockup-window col-start-1 row-start-1 w-44 rounded-xl border border-base-100 bg-base-300 before:-mt-4 before:mb-1 before:h-[6px] before:opacity-100 before:shadow-circle"
                        data-theme="dark">
                        <div class="h-24 bg-base-200">
                          <div class="flex h-full">
                            {{-- sidebar --}}
                            <div class="flex w-11 flex-col border-r border-base-100 bg-base-100">
                              <div class="p-1">
                                <div class="mb-5 h-2 w-6 rounded-badge bg-base-200"></div>
                                <div class="flex flex-col gap-1">
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                </div>
                              </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                              <div class="h-3 border-b border-base-100 bg-base-100"></div>
                              <div class="flex h-full flex-col gap-2 p-1 pb-0">
                                <div class="flex justify-between">
                                  <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                    <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                    <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                  </div>
                                  <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                    <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                    <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                  </div>
                                  <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                    <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                    <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                  </div>
                                </div>
                                <div class="flex h-full flex-col gap-1 rounded-t-md bg-base-100 p-2">
                                  <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                  <div class="w-15 h-2 rounded-badge bg-base-200"></div>
                                  <div class="w-15 h-2 rounded-badge bg-base-200"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </label>
              </li>
              <li>
                <label
                  class="inline-flex w-full cursor-pointer items-center justify-start rounded-lg border border-transparent p-2 hover:bg-base-content/10 has-[:checked]:border-primary has-[:checked]:bg-primary/5 has-[:checked]:font-bold has-[:checked]:text-indigo-900 has-[:checked]:transition-all has-[:checked]:duration-500 [&_p]:has-[:checked]:translate-y-0 [&_p]:has-[:checked]:opacity-100 [&_p]:has-[:checked]:transition-transform [&_p]:has-[:checked]:duration-500">
                  <div class="inline-flex w-full items-center gap-2">
                    <input
                      type="radio"
                      name="theme-dropdown"
                      value="light"
                      aria-label="Light"
                      data-set-theme="light"
                      :checked="theme === 'light'"
                      class="checked:text-indigo-500 checked:ring-0 checked:ring-current focus:ring-0 focus:ring-current" />
                    <div
                      class="mockup-window w-44 rounded-xl border border-base-content/5 bg-base-300 before:-mt-4 before:mb-1 before:h-[6px] before:opacity-100 before:shadow-circle"
                      data-theme="light">
                      <div class="h-24 bg-base-200">
                        <div class="flex h-full">
                          {{-- sidebar --}}
                          <div class="flex w-11 flex-col border-r bg-base-100">
                            <div class="p-1">
                              <div class="mb-5 h-2 w-6 rounded-badge bg-base-200"></div>
                              <div class="flex flex-col gap-1">
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                              </div>
                            </div>
                          </div>
                          <div class="flex flex-1 flex-col">
                            <div class="h-3 border-b bg-base-100"></div>
                            <div class="flex h-full flex-col gap-2 p-1 pb-0">
                              <div class="flex justify-between">
                                <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                  <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                  <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                </div>
                                <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                  <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                  <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                </div>
                                <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                  <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                  <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                </div>
                              </div>
                              <div class="flex h-full flex-col gap-1 rounded-t-md bg-base-100 p-2">
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                <div class="w-15 h-2 rounded-badge bg-base-200"></div>
                                <div class="w-15 h-2 rounded-badge bg-base-200"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </label>
              </li>
              <li>
                <label
                  class="inline-flex w-full cursor-pointer items-center justify-start rounded-lg border border-transparent p-2 hover:bg-base-content/10 has-[:checked]:border-primary has-[:checked]:bg-primary/5 has-[:checked]:font-bold has-[:checked]:text-indigo-900 has-[:checked]:transition-all has-[:checked]:duration-500 [&_p]:has-[:checked]:translate-y-0 [&_p]:has-[:checked]:opacity-100 [&_p]:has-[:checked]:transition-transform [&_p]:has-[:checked]:duration-500">
                  <div class="inline-flex w-full items-center gap-2">
                    <input
                      type="radio"
                      name="theme-dropdown"
                      value="dark"
                      aria-label="Dark"
                      data-set-theme="dark"
                      :checked="theme === 'dark'"
                      class="checked:text-indigo-500 checked:ring-0 checked:ring-current focus:ring-0 focus:ring-current" />

                    <div
                      class="mockup-window w-44 rounded-xl border border-base-100 bg-base-300 before:-mt-4 before:mb-1 before:h-[6px] before:opacity-100 before:shadow-circle"
                      data-theme="dark">
                      <div class="h-24 bg-base-200">
                        <div class="flex h-full">
                          {{-- sidebar --}}
                          <div class="flex w-11 flex-col border-r border-base-100 bg-base-100">
                            <div class="p-1">
                              <div class="mb-5 h-2 w-6 rounded-badge bg-base-200"></div>
                              <div class="flex flex-col gap-1">
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                              </div>
                            </div>
                          </div>
                          <div class="flex flex-1 flex-col">
                            <div class="h-3 border-b border-base-100 bg-base-100"></div>
                            <div class="flex h-full flex-col gap-2 p-1 pb-0">
                              <div class="flex justify-between">
                                <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                  <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                  <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                </div>
                                <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                  <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                  <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                </div>
                                <div class="relative h-4 w-8 rounded-sm bg-base-100">
                                  <div class="absolute left-[4px] top-[5px] h-[1px] w-4 bg-base-content/20"></div>
                                  <div class="absolute left-[8px] top-[10px] h-[1px] w-5 bg-base-content/20"></div>
                                </div>
                              </div>
                              <div class="flex h-full flex-col gap-1 rounded-t-md bg-base-100 p-2">
                                <div class="h-2 w-8 rounded-badge bg-base-200"></div>
                                <div class="w-15 h-2 rounded-badge bg-base-200"></div>
                                <div class="w-15 h-2 rounded-badge bg-base-200"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </label>
              </li>
            </ul>
          </div>
        </div>
        <div class="flex h-64 w-80 flex-col flex-wrap gap-2 rounded-xl bg-base-200 p-4">
          <button class="btn">Button</button>
          <button class="btn btn-neutral">Neutral</button>
          <button class="btn btn-primary">Primary</button>
          <button class="btn btn-secondary">Secondary</button>
          <button class="btn btn-accent">Accent</button>
          <button class="btn btn-ghost">Ghost</button>
          <button class="btn btn-link">Link</button>
        </div>
        <div>
          <div
            class="flex aspect-square w-[300px] flex-col items-center justify-center gap-2 rounded-lg bg-slate-50 p-2 shadow">
            <p class="self-start font-semibold capitalize">Payment method</p>
            <p class="self-start text-wrap pb-1 text-[10px] text-gray-500">
              This component is made by using
              <span class="font-bold underline">`:has() pseudo-class`</span>
            </p>
            <label
              class="relative inline-flex w-full cursor-pointer items-center justify-between overflow-hidden rounded-lg border border-transparent p-2 transition-all duration-500 hover:bg-slate-200 has-[:checked]:border-indigo-500 has-[:checked]:bg-indigo-50 has-[:checked]:font-bold has-[:checked]:text-indigo-900 has-[:checked]:transition-all has-[:checked]:duration-500 [&_p]:has-[:checked]:translate-y-0 [&_p]:has-[:checked]:opacity-100 [&_p]:has-[:checked]:transition-transform [&_p]:has-[:checked]:duration-500">
              <div class="relative inline-flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="currentColor">
                  <path
                    d="M32 13.333l-4.177 9.333h-1.292l1.552-3.266-2.75-6.068h1.359l1.99 4.651h0.026l1.927-4.651zM14.646 16.219v3.781h-1.313v-9.333h3.474c0.828-0.021 1.63 0.266 2.25 0.807 0.615 0.505 0.953 1.219 0.943 1.974 0.010 0.766-0.339 1.5-0.943 1.979-0.604 0.531-1.354 0.792-2.25 0.792zM14.641 11.818v3.255h2.198c0.484 0.016 0.958-0.161 1.297-0.479 0.339-0.302 0.526-0.714 0.526-1.141 0-0.432-0.188-0.844-0.526-1.141-0.349-0.333-0.818-0.51-1.297-0.495zM22.63 13.333c0.833 0 1.495 0.234 1.979 0.698s0.724 1.099 0.724 1.906v3.859h-1.083v-0.87h-0.047c-0.469 0.714-1.089 1.073-1.865 1.073-0.667 0-1.219-0.203-1.667-0.615-0.438-0.385-0.682-0.948-0.672-1.531 0-0.646 0.234-1.161 0.708-1.547 0.469-0.38 1.099-0.573 1.885-0.573 0.672 0 1.224 0.13 1.656 0.385v-0.271c0.005-0.396-0.167-0.776-0.464-1.042-0.297-0.276-0.688-0.432-1.094-0.427-0.63 0-1.13 0.276-1.5 0.828l-0.995-0.646c0.547-0.818 1.359-1.229 2.432-1.229zM21.167 17.88c-0.005 0.302 0.135 0.583 0.375 0.766 0.25 0.203 0.563 0.313 0.88 0.307 0.474 0 0.932-0.198 1.271-0.547 0.359-0.333 0.563-0.802 0.563-1.292-0.354-0.292-0.844-0.438-1.474-0.438-0.464 0-0.844 0.115-1.151 0.344-0.307 0.234-0.464 0.516-0.464 0.859zM5.443 10.667c1.344-0.016 2.646 0.479 3.641 1.391l-1.552 1.521c-0.568-0.526-1.318-0.813-2.089-0.797-1.385 0.005-2.609 0.891-3.057 2.198-0.229 0.661-0.229 1.38 0 2.042 0.448 1.307 1.672 2.193 3.057 2.198 0.734 0 1.365-0.182 1.854-0.505 0.568-0.375 0.964-0.958 1.083-1.625h-2.938v-2.052h5.13c0.063 0.359 0.094 0.719 0.094 1.083 0 1.625-0.594 3-1.62 3.927-0.901 0.813-2.135 1.286-3.604 1.286-2.047 0.010-3.922-1.125-4.865-2.938-0.771-1.505-0.771-3.286 0-4.792 0.943-1.813 2.818-2.948 4.859-2.938z"></path>
                </svg>
                <p
                  class="absolute inset-0 left-2 top-1 w-full translate-x-full translate-y-[110%] whitespace-nowrap font-semibold opacity-0 transition-all duration-700">
                  Google Pay
                </p>
              </div>
              <input
                type="radio"
                name="payment"
                value="google"
                class="checked:text-indigo-500 checked:ring-0 checked:ring-current focus:ring-0 focus:ring-current" />
            </label>
            <label
              class="relative inline-flex w-full cursor-pointer items-center justify-between overflow-hidden rounded-lg border border-transparent p-2 transition-all duration-500 hover:bg-slate-200 has-[:checked]:border-indigo-500 has-[:checked]:bg-indigo-50 has-[:checked]:font-bold has-[:checked]:text-indigo-900 has-[:checked]:transition-all has-[:checked]:duration-500 [&_p]:has-[:checked]:translate-y-0 [&_p]:has-[:checked]:opacity-100 [&_p]:has-[:checked]:transition-transform [&_p]:has-[:checked]:duration-500">
              <div class="relative inline-flex items-center justify-center gap-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="32"
                  viewBox="0 0 640 512"
                  fill="currentColor">
                  <path
                    d="M116.9 158.5c-7.5 8.9-19.5 15.9-31.5 14.9-1.5-12 4.4-24.8 11.3-32.6 7.5-9.1 20.6-15.6 31.3-16.1 1.2 12.4-3.7 24.7-11.1 33.8m10.9 17.2c-17.4-1-32.3 9.9-40.5 9.9-8.4 0-21-9.4-34.8-9.1-17.9.3-34.5 10.4-43.6 26.5-18.8 32.3-4.9 80 13.3 106.3 8.9 13 19.5 27.3 33.5 26.8 13.3-.5 18.5-8.6 34.5-8.6 16.1 0 20.8 8.6 34.8 8.4 14.5-.3 23.6-13 32.5-26 10.1-14.8 14.3-29.1 14.5-29.9-.3-.3-28-10.9-28.3-42.9-.3-26.8 21.9-39.5 22.9-40.3-12.5-18.6-32-20.6-38.8-21.1m100.4-36.2v194.9h30.3v-66.6h41.9c38.3 0 65.1-26.3 65.1-64.3s-26.4-64-64.1-64h-73.2zm30.3 25.5h34.9c26.3 0 41.3 14 41.3 38.6s-15 38.8-41.4 38.8h-34.8V165zm162.2 170.9c19 0 36.6-9.6 44.6-24.9h.6v23.4h28v-97c0-28.1-22.5-46.3-57.1-46.3-32.1 0-55.9 18.4-56.8 43.6h27.3c2.3-12 13.4-19.9 28.6-19.9 18.5 0 28.9 8.6 28.9 24.5v10.8l-37.8 2.3c-35.1 2.1-54.1 16.5-54.1 41.5.1 25.2 19.7 42 47.8 42zm8.2-23.1c-16.1 0-26.4-7.8-26.4-19.6 0-12.3 9.9-19.4 28.8-20.5l33.6-2.1v11c0 18.2-15.5 31.2-36 31.2zm102.5 74.6c29.5 0 43.4-11.3 55.5-45.4L640 193h-30.8l-35.6 115.1h-.6L537.4 193h-31.6L557 334.9l-2.8 8.6c-4.6 14.6-12.1 20.3-25.5 20.3-2.4 0-7-.3-8.9-.5v23.4c1.8.4 9.3.7 11.6.7z"></path>
                </svg>
                <p
                  class="absolute inset-0 left-2 top-1 w-full -translate-y-[110%] translate-x-full whitespace-nowrap font-semibold opacity-0 transition-all duration-700">
                  Apple Pay
                </p>
              </div>
              <input
                type="radio"
                name="payment"
                value="apple"
                class="checked:text-indigo-500 checked:ring-0 checked:ring-current focus:ring-0 focus:ring-current" />
            </label>
            <label
              class="relative inline-flex w-full cursor-pointer items-center justify-between overflow-hidden rounded-lg border border-transparent p-2 transition-all duration-500 hover:bg-slate-200 has-[:checked]:border-indigo-500 has-[:checked]:bg-indigo-50 has-[:checked]:font-bold has-[:checked]:text-indigo-900 has-[:checked]:transition-all has-[:checked]:duration-500 [&_p]:has-[:checked]:translate-y-0 [&_p]:has-[:checked]:opacity-100 [&_p]:has-[:checked]:transition-transform [&_p]:has-[:checked]:duration-500">
              <div class="relative inline-flex items-center justify-center gap-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512"
                  width="32"
                  height="32"
                  fill="currentColor">
                  <path
                    d="M186.3 258.2c0 12.2-9.7 21.5-22 21.5-9.2 0-16-5.2-16-15 0-12.2 9.5-22 21.7-22 9.3 0 16.3 5.7 16.3 15.5zM80.5 209.7h-4.7c-1.5 0-3 1-3.2 2.7l-4.3 26.7 8.2-.3c11 0 19.5-1.5 21.5-14.2 2.3-13.4-6.2-14.9-17.5-14.9zm284 0H360c-1.8 0-3 1-3.2 2.7l-4.2 26.7 8-.3c13 0 22-3 22-18-.1-10.6-9.6-11.1-18.1-11.1zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM128.3 215.4c0-21-16.2-28-34.7-28h-40c-2.5 0-5 2-5.2 4.7L32 294.2c-.3 2 1.2 4 3.2 4h19c2.7 0 5.2-2.9 5.5-5.7l4.5-26.6c1-7.2 13.2-4.7 18-4.7 28.6 0 46.1-17 46.1-45.8zm84.2 8.8h-19c-3.8 0-4 5.5-4.2 8.2-5.8-8.5-14.2-10-23.7-10-24.5 0-43.2 21.5-43.2 45.2 0 19.5 12.2 32.2 31.7 32.2 9 0 20.2-4.9 26.5-11.9-.5 1.5-1 4.7-1 6.2 0 2.3 1 4 3.2 4H200c2.7 0 5-2.9 5.5-5.7l10.2-64.3c.3-1.9-1.2-3.9-3.2-3.9zm40.5 97.9l63.7-92.6c.5-.5.5-1 .5-1.7 0-1.7-1.5-3.5-3.2-3.5h-19.2c-1.7 0-3.5 1-4.5 2.5l-26.5 39-11-37.5c-.8-2.2-3-4-5.5-4h-18.7c-1.7 0-3.2 1.8-3.2 3.5 0 1.2 19.5 56.8 21.2 62.1-2.7 3.8-20.5 28.6-20.5 31.6 0 1.8 1.5 3.2 3.2 3.2h19.2c1.8-.1 3.5-1.1 4.5-2.6zm159.3-106.7c0-21-16.2-28-34.7-28h-39.7c-2.7 0-5.2 2-5.5 4.7l-16.2 102c-.2 2 1.3 4 3.2 4h20.5c2 0 3.5-1.5 4-3.2l4.5-29c1-7.2 13.2-4.7 18-4.7 28.4 0 45.9-17 45.9-45.8zm84.2 8.8h-19c-3.8 0-4 5.5-4.3 8.2-5.5-8.5-14-10-23.7-10-24.5 0-43.2 21.5-43.2 45.2 0 19.5 12.2 32.2 31.7 32.2 9.3 0 20.5-4.9 26.5-11.9-.3 1.5-1 4.7-1 6.2 0 2.3 1 4 3.2 4H484c2.7 0 5-2.9 5.5-5.7l10.2-64.3c.3-1.9-1.2-3.9-3.2-3.9zm47.5-33.3c0-2-1.5-3.5-3.2-3.5h-18.5c-1.5 0-3 1.2-3.2 2.7l-16.2 104-.3.5c0 1.8 1.5 3.5 3.5 3.5h16.5c2.5 0 5-2.9 5.2-5.7L544 191.2v-.3zm-90 51.8c-12.2 0-21.7 9.7-21.7 22 0 9.7 7 15 16.2 15 12 0 21.7-9.2 21.7-21.5.1-9.8-6.9-15.5-16.2-15.5z"></path>
                </svg>
                <p
                  class="absolute inset-0 left-2 top-1 w-full -translate-y-[110%] translate-x-full whitespace-nowrap font-semibold opacity-0 transition-all duration-700">
                  Paypal
                </p>
              </div>
              <input
                type="radio"
                name="payment"
                value="paypal"
                class="checked:text-indigo-500 checked:ring-0 checked:ring-current focus:ring-0 focus:ring-current" />
            </label>
            <label
              class="relative inline-flex w-full cursor-pointer items-center justify-between overflow-hidden rounded-lg border border-transparent p-2 transition-all duration-500 hover:bg-slate-200 has-[:checked]:border-indigo-500 has-[:checked]:bg-indigo-50 has-[:checked]:font-bold has-[:checked]:text-indigo-900 has-[:checked]:transition-all has-[:checked]:duration-500 [&_p]:has-[:checked]:translate-y-0 [&_p]:has-[:checked]:opacity-100 [&_p]:has-[:checked]:transition-transform [&_p]:has-[:checked]:duration-500">
              <div class="relative inline-flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor">
                  <g>
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                      d="M22.222 15.768l-.225-1.125h-2.514l-.4 1.117-2.015.004a4199.19 4199.19 0 0 1 2.884-6.918c.164-.391.455-.59.884-.588.328.003.863.003 1.606.001L24 15.765l-1.778.003zm-2.173-2.666h1.62l-.605-2.82-1.015 2.82zM7.06 8.257l2.026.002-3.132 7.51-2.051-.002a950.849 950.849 0 0 1-1.528-5.956c-.1-.396-.298-.673-.679-.804C1.357 8.89.792 8.71 0 8.465V8.26h3.237c.56 0 .887.271.992.827.106.557.372 1.975.8 4.254L7.06 8.257zm4.81.002l-1.602 7.508-1.928-.002L9.94 8.257l1.93.002zm3.91-.139c.577 0 1.304.18 1.722.345l-.338 1.557c-.378-.152-1-.357-1.523-.35-.76.013-1.23.332-1.23.638 0 .498.816.749 1.656 1.293.959.62 1.085 1.177 1.073 1.782-.013 1.256-1.073 2.495-3.309 2.495-1.02-.015-1.388-.101-2.22-.396l.352-1.625c.847.355 1.206.468 1.93.468.663 0 1.232-.268 1.237-.735.004-.332-.2-.497-.944-.907-.744-.411-1.788-.98-1.774-2.122.017-1.462 1.402-2.443 3.369-2.443z"></path>
                  </g>
                </svg>
                <p
                  class="absolute inset-0 left-2 top-1 w-full translate-x-full translate-y-[110%] whitespace-nowrap font-semibold opacity-0 transition-all duration-700">
                  Credit Card
                </p>
              </div>
              <input
                type="radio"
                name="payment"
                value="visa"
                class="checked:text-indigo-500 checked:ring-0 checked:ring-current focus:ring-0 focus:ring-current" />
            </label>
          </div>
        </div>
        <div class="flex h-64 w-80 flex-col flex-wrap gap-2 rounded-xl p-4 dark:bg-yellow-200"></div>
      </div>
    </div>
  </body>
</html>
