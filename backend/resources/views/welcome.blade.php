<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    />

    <title>Laravel</title>

    <link rel="icon" type="image/svg+xml"
          href="data:image/svg+xml,%3Csvg viewBox='0 -.11376601 49.74245785 51.31690859' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z' fill='%23ff2d20'/%3E%3C/svg%3E" />

    <link
        href="https://fonts.bunny.net/css?family=figtree:300,400,500,600"
        rel="stylesheet"
    />

    <style >.tippy-box[data-animation=fade][data-state=hidden]{opacity:0}[data-tippy-root]{max-width:calc(100vw - 10px)}.tippy-box{position:relative;background-color:#333;color:#fff;border-radius:4px;font-size:14px;line-height:1.4;white-space:normal;outline:0;transition-property:transform,visibility,opacity}.tippy-box[data-placement^=top]>.tippy-arrow{bottom:0}.tippy-box[data-placement^=top]>.tippy-arrow:before{bottom:-7px;left:0;border-width:8px 8px 0;border-top-color:initial;transform-origin:center top}.tippy-box[data-placement^=bottom]>.tippy-arrow{top:0}.tippy-box[data-placement^=bottom]>.tippy-arrow:before{top:-7px;left:0;border-width:0 8px 8px;border-bottom-color:initial;transform-origin:center bottom}.tippy-box[data-placement^=left]>.tippy-arrow{right:0}.tippy-box[data-placement^=left]>.tippy-arrow:before{border-width:8px 0 8px 8px;border-left-color:initial;right:-7px;transform-origin:center left}.tippy-box[data-placement^=right]>.tippy-arrow{left:0}.tippy-box[data-placement^=right]>.tippy-arrow:before{left:-7px;border-width:8px 8px 8px 0;border-right-color:initial;transform-origin:center right}.tippy-box[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(.54,1.5,.38,1.11)}.tippy-arrow{width:16px;height:16px;color:#333}.tippy-arrow:before{content:"";position:absolute;border-color:transparent;border-style:solid}.tippy-content{position:relative;padding:5px 9px;z-index:1}.tippy-box[data-theme~=material]{background-color:#505355;font-weight:600}.tippy-box[data-theme~=material][data-placement^=top]>.tippy-arrow:before{border-top-color:#505355}.tippy-box[data-theme~=material][data-placement^=bottom]>.tippy-arrow:before{border-bottom-color:#505355}.tippy-box[data-theme~=material][data-placement^=left]>.tippy-arrow:before{border-left-color:#505355}.tippy-box[data-theme~=material][data-placement^=right]>.tippy-arrow:before{border-right-color:#505355}.tippy-box[data-theme~=material]>.tippy-backdrop{background-color:#505355}.tippy-box[data-theme~=material]>.tippy-svg-arrow{fill:#505355}.tippy-box[data-animation=scale][data-placement^=top]{transform-origin:bottom}.tippy-box[data-animation=scale][data-placement^=bottom]{transform-origin:top}.tippy-box[data-animation=scale][data-placement^=left]{transform-origin:right}.tippy-box[data-animation=scale][data-placement^=right]{transform-origin:left}.tippy-box[data-animation=scale][data-state=hidden]{transform:scale(.5);opacity:0}*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,:before,:after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / .5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / .5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.absolute{position:absolute}.relative{position:relative}.right-0{right:0}.z-10{z-index:10}.mx-5{margin-left:1.25rem;margin-right:1.25rem}.mx-auto{margin-left:auto;margin-right:auto}.my-3{margin-top:.75rem;margin-bottom:.75rem}.-mt-2{margin-top:-.5rem}.mb-12{margin-bottom:3rem}.mb-2{margin-bottom:.5rem}.mb-3{margin-bottom:.75rem}.ml-1{margin-left:.25rem}.ml-3{margin-left:.75rem}.mt-1{margin-top:.25rem}.mt-2{margin-top:.5rem}.mt-3{margin-top:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.hidden{display:none}.h-4{height:1rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-\[32\.5rem\]{height:32.5rem}.h-\[35\.5rem\]{height:35.5rem}.max-h-32{max-height:8rem}.w-4{width:1rem}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-\[8rem\]{width:8rem}.w-full{width:100%}.min-w-0{min-width:0px}.max-w-full{max-width:100%}.flex-none{flex:none}.shrink-0{flex-shrink:0}.flex-grow{flex-grow:1}.origin-top-right{transform-origin:top right}.cursor-pointer{cursor:pointer}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.flex-col{flex-direction:column}.items-center{align-items:center}.items-baseline{align-items:baseline}.justify-between{justify-content:space-between}.gap-2{gap:.5rem}.gap-3{gap:.75rem}.gap-6{gap:1.5rem}.space-y-2>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-top:calc(.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(.5rem * var(--tw-space-y-reverse))}.overflow-x-auto{overflow-x:auto}.overflow-y-hidden{overflow-y:hidden}.overflow-x-scroll{overflow-x:scroll}.truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.break-words{overflow-wrap:break-word}.rounded{border-radius:.25rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-l{border-left-width:1px}.border-l-2{border-left-width:2px}.border-r{border-right-width:1px}.border-t{border-top-width:1px}.border-transparent{border-color:transparent}.border-l-red-500{--tw-border-opacity:1;border-left-color:rgb(239 68 68 / var(--tw-border-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-gray-200{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity))}.bg-gray-200\/80{background-color:#e5e7ebcc}.bg-red-500\/20{background-color:#ef444433}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.fill-red-500{fill:#ef4444}.p-1{padding:.25rem}.p-2{padding:.5rem}.p-4{padding:1rem}.p-6{padding:1.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.py-3{padding-top:.75rem;padding-bottom:.75rem}.pb-12{padding-bottom:3rem}.pt-4{padding-top:1rem}.pt-6{padding-top:1.5rem}.text-left{text-align:left}.text-right{text-align:right}.font-mono{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-2xl{font-size:1.5rem;line-height:2rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:.75rem;line-height:1rem}.font-bold{font-weight:700}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-blue-500{--tw-text-opacity:1;color:rgb(59 130 246 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-50{--tw-text-opacity:1;color:rgb(249 250 251 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-red-500{--tw-text-opacity:1;color:rgb(239 68 68 / var(--tw-text-opacity))}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / .1), 0 8px 10px -6px rgb(0 0 0 / .1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-gray-900\/5{--tw-ring-color:rgb(17 24 39 / .05)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}[x-cloak]{display:none}html{-moz-tab-size:4;-o-tab-size:4;tab-size:4}table.hljs-ln{color:inherit;font-size:inherit;border-spacing:2px}pre code.hljs{background:none;padding:.5em 0 0;width:100%}.hljs-ln-line{white-space-collapse:preserve;text-wrap:nowrap}.trace{-webkit-mask-image:linear-gradient(180deg,#000 calc(100% - 4rem),transparent)}.scrollbar-hidden{-ms-overflow-style:none;scrollbar-width:none;overflow-x:scroll}.scrollbar-hidden::-webkit-scrollbar{-webkit-appearance:none;width:0;height:0}.hljs-ln .hljs-ln-numbers{padding:5px;border-right-color:transparent;margin-right:5px}.hljs-ln-n{width:50px}.hljs-ln-numbers{-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;user-select:none;text-align:center;border-right:1px solid #ccc;vertical-align:top;padding-right:5px}.hljs-ln-code{width:100%;padding-left:10px;padding-right:10px}.hljs-ln-code:hover{background-color:#ef444433}.default\:col-span-full:default{grid-column:1 / -1}.default\:row-span-1:default{grid-row:span 1 / span 1}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.hover\:bg-gray-100\/75:hover{background-color:#f3f4f6bf}.hover\:text-gray-500:hover{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.hover\:underline:hover{text-decoration-line:underline}.focus\:text-gray-500:focus{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.dark\:block:is(.dark *){display:block}.dark\:hidden:is(.dark *){display:none}.dark\:border:is(.dark *){border-width:1px}.dark\:border-gray-700:is(.dark *){--tw-border-opacity:1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:border-gray-800:is(.dark *){--tw-border-opacity:1;border-color:rgb(31 41 55 / var(--tw-border-opacity))}.dark\:border-gray-900:is(.dark *){--tw-border-opacity:1;border-color:rgb(17 24 39 / var(--tw-border-opacity))}.dark\:border-l-red-500:is(.dark *){--tw-border-opacity:1;border-left-color:rgb(239 68 68 / var(--tw-border-opacity))}.dark\:bg-gray-800:is(.dark *){--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900\/80:is(.dark *){background-color:#111827cc}.dark\:bg-gray-950\/95:is(.dark *){background-color:#030712f2}.dark\:bg-red-500\/20:is(.dark *){background-color:#ef444433}.dark\:text-gray-100:is(.dark *){--tw-text-opacity:1;color:rgb(243 244 246 / var(--tw-text-opacity))}.dark\:text-gray-300:is(.dark *){--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity))}.dark\:text-gray-400:is(.dark *){--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-600:is(.dark *){--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.dark\:text-gray-950:is(.dark *){--tw-text-opacity:1;color:rgb(3 7 18 / var(--tw-text-opacity))}.dark\:text-white:is(.dark *){--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:ring-1:is(.dark *){--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.dark\:ring-gray-800:is(.dark *){--tw-ring-opacity:1;--tw-ring-color:rgb(31 41 55 / var(--tw-ring-opacity))}.dark\:hover\:bg-gray-700:hover:is(.dark *){--tw-bg-opacity:1;background-color:rgb(55 65 81 / var(--tw-bg-opacity))}.dark\:hover\:bg-gray-800:hover:is(.dark *){--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:hover\:bg-gray-800\/75:hover:is(.dark *){background-color:#1f2937bf}.dark\:hover\:text-gray-500:hover:is(.dark *){--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.dark\:focus\:text-gray-500:focus:is(.dark *){--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}@media (min-width: 640px){.sm\:col-span-1{grid-column:span 1 / span 1}.sm\:col-span-2{grid-column:span 2 / span 2}.sm\:mt-10{margin-top:2.5rem}.sm\:gap-6{gap:1.5rem}.sm\:p-12{padding:3rem}.sm\:py-5{padding-top:1.25rem;padding-bottom:1.25rem}.sm\:text-3xl{font-size:1.875rem;line-height:2.25rem}}@media (min-width: 768px){.md\:block{display:block}.md\:inline{display:inline}.md\:flex{display:flex}.md\:hidden{display:none}.md\:min-w-64{min-width:16rem}.md\:max-w-80{max-width:20rem}.md\:items-center{align-items:center}.md\:justify-between{justify-content:space-between}.md\:gap-2{gap:.5rem}}@media (min-width: 1024px){.lg\:block{display:block}.lg\:inline-block{display:inline-block}.lg\:w-\[12rem\]{width:12rem}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:px-8{padding-left:2rem;padding-right:2rem}.lg\:text-2xl{font-size:1.5rem;line-height:2rem}.lg\:text-base{font-size:1rem;line-height:1.5rem}.lg\:text-sm{font-size:.875rem;line-height:1.25rem}.default\:lg\:col-span-6:default{grid-column:span 6 / span 6}}
</style><style data-theme="light">pre code.hljs{display:block;overflow-x:auto;padding:1em}code.hljs{padding:3px 5px}/*!
  Theme: GitHub
  Description: Light theme as seen on github.com
  Author: github.com
  Maintainer: @Hirse
  Updated: 2021-05-15

  Outdated base version: https://github.com/primer/github-syntax-light
  Current colors taken from GitHub's CSS
*/.hljs{color:#24292e;background:#fff}.hljs-doctag,.hljs-keyword,.hljs-meta .hljs-keyword,.hljs-template-tag,.hljs-template-variable,.hljs-type,.hljs-variable.language_{color:#d73a49}.hljs-title,.hljs-title.class_,.hljs-title.class_.inherited__,.hljs-title.function_{color:#6f42c1}.hljs-attr,.hljs-attribute,.hljs-literal,.hljs-meta,.hljs-number,.hljs-operator,.hljs-selector-attr,.hljs-selector-class,.hljs-selector-id,.hljs-variable{color:#005cc5}.hljs-meta .hljs-string,.hljs-regexp,.hljs-string{color:#032f62}.hljs-built_in,.hljs-symbol{color:#e36209}.hljs-code,.hljs-comment,.hljs-formula{color:#6a737d}.hljs-name,.hljs-quote,.hljs-selector-pseudo,.hljs-selector-tag{color:#22863a}.hljs-subst{color:#24292e}.hljs-section{color:#005cc5;font-weight:700}.hljs-bullet{color:#735c0f}.hljs-emphasis{color:#24292e;font-style:italic}.hljs-strong{color:#24292e;font-weight:700}.hljs-addition{color:#22863a;background-color:#f0fff4}.hljs-deletion{color:#b31d28;background-color:#ffeef0}
</style><style data-theme="dark">pre code.hljs{display:block;overflow-x:auto;padding:1em}code.hljs{padding:3px 5px}.hljs{color:#abb2bf;background:#282c34}.hljs-comment,.hljs-quote{color:#5c6370;font-style:italic}.hljs-doctag,.hljs-formula,.hljs-keyword{color:#c678dd}.hljs-deletion,.hljs-name,.hljs-section,.hljs-selector-tag,.hljs-subst{color:#e06c75}.hljs-literal{color:#56b6c2}.hljs-addition,.hljs-attribute,.hljs-meta .hljs-string,.hljs-regexp,.hljs-string{color:#98c379}.hljs-attr,.hljs-number,.hljs-selector-attr,.hljs-selector-class,.hljs-selector-pseudo,.hljs-template-variable,.hljs-type,.hljs-variable{color:#d19a66}.hljs-bullet,.hljs-link,.hljs-meta,.hljs-selector-id,.hljs-symbol,.hljs-title{color:#61aeee}.hljs-built_in,.hljs-class .hljs-title,.hljs-title.class_{color:#e6c07b}.hljs-emphasis{font-style:italic}.hljs-strong{font-weight:700}.hljs-link{text-decoration:underline}
</style>

    <style>
                    #frame-0 .hljs-ln-line[data-line-number='5450'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-1 .hljs-ln-line[data-line-number='124'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-2 .hljs-ln-line[data-line-number='57'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-3 .hljs-ln-line[data-line-number='74'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-4 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-5 .hljs-ln-line[data-line-number='191'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-6 .hljs-ln-line[data-line-number='160'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-7 .hljs-ln-line[data-line-number='78'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-8 .hljs-ln-line[data-line-number='34'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-9 .hljs-ln-line[data-line-number='924'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-10 .hljs-ln-line[data-line-number='891'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-11 .hljs-ln-line[data-line-number='807'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-12 .hljs-ln-line[data-line-number='169'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-13 .hljs-ln-line[data-line-number='50'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-14 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-15 .hljs-ln-line[data-line-number='87'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-16 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-17 .hljs-ln-line[data-line-number='48'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-18 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-19 .hljs-ln-line[data-line-number='120'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-20 .hljs-ln-line[data-line-number='63'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-21 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-22 .hljs-ln-line[data-line-number='36'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-23 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-24 .hljs-ln-line[data-line-number='74'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-25 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-26 .hljs-ln-line[data-line-number='126'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-27 .hljs-ln-line[data-line-number='807'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-28 .hljs-ln-line[data-line-number='786'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-29 .hljs-ln-line[data-line-number='750'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-30 .hljs-ln-line[data-line-number='739'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-31 .hljs-ln-line[data-line-number='200'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-32 .hljs-ln-line[data-line-number='169'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-33 .hljs-ln-line[data-line-number='21'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-34 .hljs-ln-line[data-line-number='31'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-35 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-36 .hljs-ln-line[data-line-number='21'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-37 .hljs-ln-line[data-line-number='51'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-38 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-39 .hljs-ln-line[data-line-number='27'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-40 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-41 .hljs-ln-line[data-line-number='109'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-42 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-43 .hljs-ln-line[data-line-number='48'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-44 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-45 .hljs-ln-line[data-line-number='58'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-46 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-47 .hljs-ln-line[data-line-number='22'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-48 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-49 .hljs-ln-line[data-line-number='26'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-50 .hljs-ln-line[data-line-number='208'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-51 .hljs-ln-line[data-line-number='126'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-52 .hljs-ln-line[data-line-number='175'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-53 .hljs-ln-line[data-line-number='144'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-54 .hljs-ln-line[data-line-number='1219'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-55 .hljs-ln-line[data-line-number='20'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
                    #frame-56 .hljs-ln-line[data-line-number='23'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
            </style>
</head>
<body class="bg-gray-200/80 font-sans antialiased dark:bg-gray-950/95">
    <div class="renderer container mx-auto lg:px-8">
        <header class="mt-3 px-5 sm:mt-10">
    <div class="py-3 dark:border-gray-900 sm:py-5">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="rounded-full bg-red-500/20 p-4 dark:bg-red-500/20">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6 fill-red-500 text-gray-50 dark:text-gray-950"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                    </svg>
                </div>

                <span class="text-dark ml-3 text-2xl font-bold dark:text-white sm:text-3xl">
                    Internal Server Error
                </span>
            </div>

            <div class="flex items-center gap-3 sm:gap-6">
                <script>

    (function () {
        const darkStyles = document.querySelector('style[data-theme="dark"]')?.textContent
        const lightStyles = document.querySelector('style[data-theme="light"]')?.textContent

        const removeStyles = () => {
            document.querySelector('style[data-theme="dark"]')?.remove()
            document.querySelector('style[data-theme="light"]')?.remove()
        }

        removeStyles()

        setDarkClass = () => {
            removeStyles()

            const isDark = localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)

            isDark ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark')

            if (isDark) {
                document.head.insertAdjacentHTML('beforeend', `<style data-theme="dark">${darkStyles}</style>`)
            } else {
                document.head.insertAdjacentHTML('beforeend', `<style data-theme="light">${lightStyles}</style>`)
            }
        }

        setDarkClass()

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setDarkClass)
    })();
</script>

<div
    class="relative"
    x-data="{
        menu: false,
        theme: localStorage.theme,
        darkMode() {
            this.theme = 'dark'
            localStorage.theme = 'dark'
            setDarkClass()
        },
        lightMode() {
            this.theme = 'light'
            localStorage.theme = 'light'
            setDarkClass()
        },
        systemMode() {
            this.theme = undefined
            localStorage.removeItem('theme')
            setDarkClass()
        },
    }"
    @click.outside="menu = false"
>
    <button
        x-cloak
        class="block rounded p-1 hover:bg-gray-100 dark:hover:bg-gray-800"
        :class="theme ? 'text-gray-700 dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 hover:text-gray-500 focus:text-gray-500 dark:hover:text-gray-500 dark:focus:text-gray-500'"
        @click="menu = ! menu"
    >
        <svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="block h-5 w-5 dark:hidden"
>
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
</svg>
        <svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="hidden h-5 w-5 dark:block"
>
    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
</svg>
    </button>

    <div
        x-show="menu"
        class="absolute right-0 z-10 flex origin-top-right flex-col rounded-md bg-white shadow-xl ring-1 ring-gray-900/5 dark:bg-gray-800"
        style="display: none"
        @click="menu = false"
    >
        <button
            class="flex items-center gap-3 px-4 py-2 hover:rounded-t-md hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="theme === 'light' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
            @click="lightMode()"
        >
            <svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="h-5 w-5"
>
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
</svg>
            Light
        </button>
        <button
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="theme === 'dark' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
            @click="darkMode()"
        >
            <svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="h-5 w-5"
>
    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
</svg>
            Dark
        </button>
        <button
            class="flex items-center gap-3 px-4 py-2 hover:rounded-b-md hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="theme === undefined ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
            @click="systemMode()"
        >
            <svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="h-5 w-5"
>
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
</svg>
            System
        </button>
    </div>
</div>
            </div>
        </div>
    </div>
</header>

        <main class="px-6 pb-12 pt-6">
            <div class="container mx-auto">
                <section
    class="@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl"
>
    <div class="md:flex md:items-center md:justify-between md:gap-2">
        <div class="min-w-0">
            <div class="inline-block rounded-full bg-red-500/20 px-3 py-2 max-w-full text-sm font-bold leading-5 text-red-500 truncate lg:text-base dark:bg-red-500/20">
                <span class="hidden md:inline">
                    ParseError
                </span>
                <span class="md:hidden">
                    ParseError
                </span>
            </div>
            <div class="mt-4 text-lg font-semibold text-gray-900 break-words dark:text-white lg:text-2xl">
                syntax error, unexpected identifier &quot;n&quot;, expecting &quot;:&quot;
            </div>
        </div>

        <div class="hidden text-right shrink-0 md:block md:min-w-64 md:max-w-80">
            <div>
                <span class="inline-block rounded-full bg-gray-200 px-3 py-2 text-sm leading-5 text-gray-900 max-w-full truncate dark:bg-gray-800 dark:text-white">
                    GET 127.0.0.1:8000
                </span>
            </div>
            <div class="px-4">
                <span class="text-sm text-gray-500 dark:text-gray-400">PHP 8.2.12 — Laravel 12.8.1</span>
            </div>
        </div>
    </div>
</section>

                <section
    class="@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl mt-6 overflow-x-auto"
>
    <div
        x-data="{
            includeVendorFrames: false,
            index: 0,
        }"
    >
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3" x-clock>
            <div class="hidden overflow-x-auto sm:col-span-1 lg:block">
    <div
        class="h-[35.5rem] scrollbar-hidden trace text-sm text-gray-400 dark:text-gray-300"
    >
        <div class="mb-2 inline-block rounded-full bg-red-500/20 px-3 py-2 dark:bg-red-500/20 sm:col-span-1">
            <button
                @click="includeVendorFrames = !includeVendorFrames"
                class="inline-flex items-center font-bold leading-5 text-red-500"
            >
                <span x-show="includeVendorFrames">Collapse</span>
                <span
                    x-cloak
                    x-show="!includeVendorFrames"
                    >Expand</span
                >
                <span class="ml-1">vendor frames</span>

                <div class="flex flex-col ml-1 -mt-2" x-cloak x-show="includeVendorFrames">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
</svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
  <path fill-rule="evenodd" d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z" clip-rule="evenodd" />
</svg>
                </div>

                <div class="flex flex-col ml-1 -mt-2" x-cloak x-show="! includeVendorFrames">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
  <path fill-rule="evenodd" d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z" clip-rule="evenodd" />
</svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
</svg>
                </div>
            </button>
        </div>

        <div class="mb-12 space-y-2">
                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 0"
                >
                    <div
                        x-bind:class="
                            index === 0
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\resources\views\welcome.blade.php</span>
                                    <span class="font-mono text-xs">:5450</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Filesystem\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 1"
                >
                    <div
                        x-bind:class="
                            index === 1
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Filesystem\Filesystem</span>
                                    <span class="font-mono text-xs">:124</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                getRequire
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 2"
                >
                    <div
                        x-bind:class="
                            index === 2
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\View\Engines\PhpEngine</span>
                                    <span class="font-mono text-xs">:57</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                evaluatePath
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 3"
                >
                    <div
                        x-bind:class="
                            index === 3
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\View\Engines\CompilerEngine</span>
                                    <span class="font-mono text-xs">:74</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                get
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 4"
                >
                    <div
                        x-bind:class="
                            index === 4
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\View\View</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                getContents
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 5"
                >
                    <div
                        x-bind:class="
                            index === 5
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\View\View</span>
                                    <span class="font-mono text-xs">:191</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                renderContents
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 6"
                >
                    <div
                        x-bind:class="
                            index === 6
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\View\View</span>
                                    <span class="font-mono text-xs">:160</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                render
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 7"
                >
                    <div
                        x-bind:class="
                            index === 7
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Http\Response</span>
                                    <span class="font-mono text-xs">:78</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                setContent
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 8"
                >
                    <div
                        x-bind:class="
                            index === 8
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Http\Response</span>
                                    <span class="font-mono text-xs">:34</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                __construct
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 9"
                >
                    <div
                        x-bind:class="
                            index === 9
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\Router</span>
                                    <span class="font-mono text-xs">:924</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                toResponse
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 10"
                >
                    <div
                        x-bind:class="
                            index === 10
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\Router</span>
                                    <span class="font-mono text-xs">:891</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                prepareResponse
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 11"
                >
                    <div
                        x-bind:class="
                            index === 11
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\Router</span>
                                    <span class="font-mono text-xs">:807</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Routing\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 12"
                >
                    <div
                        x-bind:class="
                            index === 12
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:169</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 13"
                >
                    <div
                        x-bind:class="
                            index === 13
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\Middleware\SubstituteBindings</span>
                                    <span class="font-mono text-xs">:50</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 14"
                >
                    <div
                        x-bind:class="
                            index === 14
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 15"
                >
                    <div
                        x-bind:class="
                            index === 15
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Middleware\VerifyCsrfToken</span>
                                    <span class="font-mono text-xs">:87</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 16"
                >
                    <div
                        x-bind:class="
                            index === 16
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 17"
                >
                    <div
                        x-bind:class="
                            index === 17
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\View\Middleware\ShareErrorsFromSession</span>
                                    <span class="font-mono text-xs">:48</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 18"
                >
                    <div
                        x-bind:class="
                            index === 18
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 19"
                >
                    <div
                        x-bind:class="
                            index === 19
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Session\Middleware\StartSession</span>
                                    <span class="font-mono text-xs">:120</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handleStatefulRequest
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 20"
                >
                    <div
                        x-bind:class="
                            index === 20
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Session\Middleware\StartSession</span>
                                    <span class="font-mono text-xs">:63</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 21"
                >
                    <div
                        x-bind:class="
                            index === 21
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 22"
                >
                    <div
                        x-bind:class="
                            index === 22
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse</span>
                                    <span class="font-mono text-xs">:36</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 23"
                >
                    <div
                        x-bind:class="
                            index === 23
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 24"
                >
                    <div
                        x-bind:class="
                            index === 24
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Cookie\Middleware\EncryptCookies</span>
                                    <span class="font-mono text-xs">:74</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 25"
                >
                    <div
                        x-bind:class="
                            index === 25
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 26"
                >
                    <div
                        x-bind:class="
                            index === 26
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:126</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                then
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 27"
                >
                    <div
                        x-bind:class="
                            index === 27
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\Router</span>
                                    <span class="font-mono text-xs">:807</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                runRouteWithinStack
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 28"
                >
                    <div
                        x-bind:class="
                            index === 28
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\Router</span>
                                    <span class="font-mono text-xs">:786</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                runRoute
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 29"
                >
                    <div
                        x-bind:class="
                            index === 29
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\Router</span>
                                    <span class="font-mono text-xs">:750</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                dispatchToRoute
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 30"
                >
                    <div
                        x-bind:class="
                            index === 30
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Routing\Router</span>
                                    <span class="font-mono text-xs">:739</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                dispatch
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 31"
                >
                    <div
                        x-bind:class="
                            index === 31
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Kernel</span>
                                    <span class="font-mono text-xs">:200</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Foundation\Http\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 32"
                >
                    <div
                        x-bind:class="
                            index === 32
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:169</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 33"
                >
                    <div
                        x-bind:class="
                            index === 33
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Middleware\TransformsRequest</span>
                                    <span class="font-mono text-xs">:21</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 34"
                >
                    <div
                        x-bind:class="
                            index === 34
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull</span>
                                    <span class="font-mono text-xs">:31</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 35"
                >
                    <div
                        x-bind:class="
                            index === 35
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 36"
                >
                    <div
                        x-bind:class="
                            index === 36
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Middleware\TransformsRequest</span>
                                    <span class="font-mono text-xs">:21</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 37"
                >
                    <div
                        x-bind:class="
                            index === 37
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Middleware\TrimStrings</span>
                                    <span class="font-mono text-xs">:51</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 38"
                >
                    <div
                        x-bind:class="
                            index === 38
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 39"
                >
                    <div
                        x-bind:class="
                            index === 39
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Http\Middleware\ValidatePostSize</span>
                                    <span class="font-mono text-xs">:27</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 40"
                >
                    <div
                        x-bind:class="
                            index === 40
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 41"
                >
                    <div
                        x-bind:class="
                            index === 41
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance</span>
                                    <span class="font-mono text-xs">:109</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 42"
                >
                    <div
                        x-bind:class="
                            index === 42
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 43"
                >
                    <div
                        x-bind:class="
                            index === 43
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Http\Middleware\HandleCors</span>
                                    <span class="font-mono text-xs">:48</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 44"
                >
                    <div
                        x-bind:class="
                            index === 44
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 45"
                >
                    <div
                        x-bind:class="
                            index === 45
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Http\Middleware\TrustProxies</span>
                                    <span class="font-mono text-xs">:58</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 46"
                >
                    <div
                        x-bind:class="
                            index === 46
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 47"
                >
                    <div
                        x-bind:class="
                            index === 47
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Middleware\InvokeDeferredCallbacks</span>
                                    <span class="font-mono text-xs">:22</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 48"
                >
                    <div
                        x-bind:class="
                            index === 48
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 49"
                >
                    <div
                        x-bind:class="
                            index === 49
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Http\Middleware\ValidatePathEncoding</span>
                                    <span class="font-mono text-xs">:26</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 50"
                >
                    <div
                        x-bind:class="
                            index === 50
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:208</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                Illuminate\Pipeline\{closure}
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 51"
                >
                    <div
                        x-bind:class="
                            index === 51
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Pipeline\Pipeline</span>
                                    <span class="font-mono text-xs">:126</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                then
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 52"
                >
                    <div
                        x-bind:class="
                            index === 52
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Kernel</span>
                                    <span class="font-mono text-xs">:175</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                sendRequestThroughRouter
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 53"
                >
                    <div
                        x-bind:class="
                            index === 53
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Http\Kernel</span>
                                    <span class="font-mono text-xs">:144</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handle
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 54"
                >
                    <div
                        x-bind:class="
                            index === 54
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">Illuminate\Foundation\Application</span>
                                    <span class="font-mono text-xs">:1219</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                handleRequest
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 55"
                >
                    <div
                        x-bind:class="
                            index === 55
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\public\index.php</span>
                                    <span class="font-mono text-xs">:20</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                require_once
                            </div>
                        </div>
                    </div>
                </button>

                                                                
                    <div x-show="! includeVendorFrames">
                                            </div>
                
                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="true"
                    @click="index = 56"
                >
                    <div
                        x-bind:class="
                            index === 56
                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\resources\server.php</span>
                                    <span class="font-mono text-xs">:23</span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                
                            </div>
                        </div>
                    </div>
                </button>

                                                                        </div>
    </div>
</div>
            <div
        class="sm:col-span-2"
        x-show="index === 0"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\resources\views\welcome.blade.php</span>
                    
                    <span class="font-mono text-xs">:5450</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-0"
                    class="language-php highlightable-code  default-highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="5450"
                    data-ln-start-from="5445"
                >    &lt;script&gt;
        var ce=&quot;top&quot;,be=&quot;bottom&quot;,ye=&quot;right&quot;,ue=&quot;left&quot;,nr=&quot;auto&quot;,Bt=[ce,be,ye,ue],dt=&quot;start&quot;,Dt=&quot;end&quot;,ua=&quot;clippingParents&quot;,mi=&quot;viewport&quot;,Et=&quot;popper&quot;,la=&quot;reference&quot;,Pr=Bt.reduce(function(e,t){return e.concat([t+&quot;-&quot;+dt,t+&quot;-&quot;+Dt])},[]),xi=[].concat(Bt,[nr]).reduce(function(e,t){return e.concat([t,t+&quot;-&quot;+dt,t+&quot;-&quot;+Dt])},[]),fa=&quot;beforeRead&quot;,da=&quot;read&quot;,pa=&quot;afterRead&quot;,ha=&quot;beforeMain&quot;,ga=&quot;main&quot;,va=&quot;afterMain&quot;,_a=&quot;beforeWrite&quot;,ba=&quot;write&quot;,ya=&quot;afterWrite&quot;,ma=[fa,da,pa,ha,ga,va,_a,ba,ya];function Me(e){return e?(e.nodeName||&quot;&quot;).toLowerCase():null}function fe(e){if(e==null)return window;if(e.toString()!==&quot;[object Window]&quot;){var t=e.ownerDocument;return t&amp;&amp;t.defaultView||window}return e}function it(e){var t=fe(e).Element;return e instanceof t||e instanceof Element}function _e(e){var t=fe(e).HTMLElement;return e instanceof t||e instanceof HTMLElement}function rr(e){if(typeof ShadowRoot&gt;&quot;u&quot;)return!1;var t=fe(e).ShadowRoot;return e instanceof t||e instanceof ShadowRoot}function xa(e){var t=e.state;Object.keys(t.elements).forEach(function(n){var r=t.styles[n]||{},i=t.attributes[n]||{},o=t.elements[n];!_e(o)||!Me(o)||(Object.assign(o.style,r),Object.keys(i).forEach(function(a){var s=i[a];s===!1?o.removeAttribute(a):o.setAttribute(a,s===!0?&quot;&quot;:s)}))})}function Ea(e){var t=e.state,n={popper:{position:t.options.strategy,left:&quot;0&quot;,top:&quot;0&quot;,margin:&quot;0&quot;},arrow:{position:&quot;absolute&quot;},reference:{}};return Object.assign(t.elements.popper.style,n.popper),t.styles=n,t.elements.arrow&amp;&amp;Object.assign(t.elements.arrow.style,n.arrow),function(){Object.keys(t.elements).forEach(function(r){var i=t.elements[r],o=t.attributes[r]||{},a=Object.keys(t.styles.hasOwnProperty(r)?t.styles[r]:n[r]),s=a.reduce(function(c,f){return c[f]=&quot;&quot;,c},{});!_e(i)||!Me(i)||(Object.assign(i.style,s),Object.keys(o).forEach(function(c){i.removeAttribute(c)}))})}}const Ei={name:&quot;applyStyles&quot;,enabled:!0,phase:&quot;write&quot;,fn:xa,effect:Ea,requires:[&quot;computeStyles&quot;]};function Te(e){return e.split(&quot;-&quot;)[0]}var Ze=Math.max,rn=Math.min,pt=Math.round;function Pn(){var e=navigator.userAgentData;return e!=null&amp;&amp;e.brands&amp;&amp;Array.isArray(e.brands)?e.brands.map(function(t){return t.brand+&quot;/&quot;+t.version}).join(&quot; &quot;):navigator.userAgent}function wi(){return!/^((?!chrome|android).)*safari/i.test(Pn())}function ht(e,t,n){t===void 0&amp;&amp;(t=!1),n===void 0&amp;&amp;(n=!1);var r=e.getBoundingClientRect(),i=1,o=1;t&amp;&amp;_e(e)&amp;&amp;(i=e.offsetWidth&gt;0&amp;&amp;pt(r.width)/e.offsetWidth||1,o=e.offsetHeight&gt;0&amp;&amp;pt(r.height)/e.offsetHeight||1);var a=it(e)?fe(e):window,s=a.visualViewport,c=!wi()&amp;&amp;n,f=(r.left+(c&amp;&amp;s?s.offsetLeft:0))/i,l=(r.top+(c&amp;&amp;s?s.offsetTop:0))/o,v=r.width/i,b=r.height/o;return{width:v,height:b,top:l,right:f+v,bottom:l+b,left:f,x:f,y:l}}function ir(e){var t=ht(e),n=e.offsetWidth,r=e.offsetHeight;return Math.abs(t.width-n)&lt;=1&amp;&amp;(n=t.width),Math.abs(t.height-r)&lt;=1&amp;&amp;(r=t.height),{x:e.offsetLeft,y:e.offsetTop,width:n,height:r}}function Oi(e,t){var n=t.getRootNode&amp;&amp;t.getRootNode();if(e.contains(t))return!0;if(n&amp;&amp;rr(n)){var r=t;do{if(r&amp;&amp;e.isSameNode(r))return!0;r=r.parentNode||r.host}while(r)}return!1}function De(e){return fe(e).getComputedStyle(e)}function wa(e){return[&quot;table&quot;,&quot;td&quot;,&quot;th&quot;].indexOf(Me(e))&gt;=0}function We(e){return((it(e)?e.ownerDocument:e.document)||window.document).documentElement}function fn(e){return Me(e)===&quot;html&quot;?e:e.assignedSlot||e.parentNode||(rr(e)?e.host:null)||We(e)}function kr(e){return!_e(e)||De(e).position===&quot;fixed&quot;?null:e.offsetParent}function Oa(e){var t=/firefox/i.test(Pn()),n=/Trident/i.test(Pn());if(n&amp;&amp;_e(e)){var r=De(e);if(r.position===&quot;fixed&quot;)return null}var i=fn(e);for(rr(i)&amp;&amp;(i=i.host);_e(i)&amp;&amp;[&quot;html&quot;,&quot;body&quot;].indexOf(Me(i))&lt;0;){var o=De(i);if(o.transform!==&quot;none&quot;||o.perspective!==&quot;none&quot;||o.contain===&quot;paint&quot;||[&quot;transform&quot;,&quot;perspective&quot;].indexOf(o.willChange)!==-1||t&amp;&amp;o.willChange===&quot;filter&quot;||t&amp;&amp;o.filter&amp;&amp;o.filter!==&quot;none&quot;)return i;i=i.parentNode}return null}function $t(e){for(var t=fe(e),n=kr(e);n&amp;&amp;wa(n)&amp;&amp;De(n).position===&quot;static&quot;;)n=kr(n);return n&amp;&amp;(Me(n)===&quot;html&quot;||Me(n)===&quot;body&quot;&amp;&amp;De(n).position===&quot;static&quot;)?t:n||Oa(e)||t}function or(e){return[&quot;top&quot;,&quot;bottom&quot;].indexOf(e)&gt;=0?&quot;x&quot;:&quot;y&quot;}function Tt(e,t,n){return Ze(e,rn(t,n))}function Aa(e,t,n){var r=Tt(e,t,n);return r&gt;n?n:r}function Ai(){return{top:0,right:0,bottom:0,left:0}}function Si(e){return Object.assign({},Ai(),e)}function Ti(e,t){return t.reduce(function(n,r){return n[r]=e,n},{})}var Sa=function(t,n){return t=typeof t==&quot;function&quot;?t(Object.assign({},n.rects,{placement:n.placement})):t,Si(typeof t!=&quot;number&quot;?t:Ti(t,Bt))};function Ta(e){var t,n=e.state,r=e.name,i=e.options,o=n.elements.arrow,a=n.modifiersData.popperOffsets,s=Te(n.placement),c=or(s),f=[ue,ye].indexOf(s)&gt;=0,l=f?&quot;height&quot;:&quot;width&quot;;if(!(!o||!a)){var v=Sa(i.padding,n),b=ir(o),_=c===&quot;y&quot;?ce:ue,A=c===&quot;y&quot;?be:ye,S=n.rects.reference[l]+n.rects.reference[c]-a[c]-n.rects.popper[l],h=a[c]-n.rects.reference[c],E=$t(o),O=E?c===&quot;y&quot;?E.clientHeight||0:E.clientWidth||0:0,M=S/2-h/2,u=v[_],I=O-b[l]-v[A],m=O/2-b[l]/2+M,L=Tt(u,m,I),K=c;n.modifiersData[r]=(t={},t[K]=L,t.centerOffset=L-m,t)}}function Ma(e){var t=e.state,n=e.options,r=n.element,i=r===void 0?&quot;[data-popper-arrow]&quot;:r;i!=null&amp;&amp;(typeof i==&quot;string&quot;&amp;&amp;(i=t.elements.popper.querySelector(i),!i)||Oi(t.elements.popper,i)&amp;&amp;(t.elements.arrow=i))}const Ca={name:&quot;arrow&quot;,enabled:!0,phase:&quot;main&quot;,fn:Ta,effect:Ma,requires:[&quot;popperOffsets&quot;],requiresIfExists:[&quot;preventOverflow&quot;]};function gt(e){return e.split(&quot;-&quot;)[1]}var Ra={top:&quot;auto&quot;,right:&quot;auto&quot;,bottom:&quot;auto&quot;,left:&quot;auto&quot;};function Ia(e,t){var n=e.x,r=e.y,i=t.devicePixelRatio||1;return{x:pt(n*i)/i||0,y:pt(r*i)/i||0}}function Br(e){var t,n=e.popper,r=e.popperRect,i=e.placement,o=e.variation,a=e.offsets,s=e.position,c=e.gpuAcceleration,f=e.adaptive,l=e.roundOffsets,v=e.isFixed,b=a.x,_=b===void 0?0:b,A=a.y,S=A===void 0?0:A,h=typeof l==&quot;function&quot;?l({x:_,y:S}):{x:_,y:S};_=h.x,S=h.y;var E=a.hasOwnProperty(&quot;x&quot;),O=a.hasOwnProperty(&quot;y&quot;),M=ue,u=ce,I=window;if(f){var m=$t(n),L=&quot;clientHeight&quot;,K=&quot;clientWidth&quot;;if(m===fe(n)&amp;&amp;(m=We(n),De(m).position!==&quot;static&quot;&amp;&amp;s===&quot;absolute&quot;&amp;&amp;(L=&quot;scrollHeight&quot;,K=&quot;scrollWidth&quot;)),m=m,i===ce||(i===ue||i===ye)&amp;&amp;o===Dt){u=be;var P=v&amp;&amp;m===I&amp;&amp;I.visualViewport?I.visualViewport.height:m[L];S-=P-r.height,S*=c?1:-1}if(i===ue||(i===ce||i===be)&amp;&amp;o===Dt){M=ye;var H=v&amp;&amp;m===I&amp;&amp;I.visualViewport?I.visualViewport.width:m[K];_-=H-r.width,_*=c?1:-1}}var q=Object.assign({position:s},f&amp;&amp;Ra),z=l===!0?Ia({x:_,y:S},fe(n)):{x:_,y:S};if(_=z.x,S=z.y,c){var k;return Object.assign({},q,(k={},k[u]=O?&quot;0&quot;:&quot;&quot;,k[M]=E?&quot;0&quot;:&quot;&quot;,k.transform=(I.devicePixelRatio||1)&lt;=1?&quot;translate(&quot;+_+&quot;px, &quot;+S+&quot;px)&quot;:&quot;translate3d(&quot;+_+&quot;px, &quot;+S+&quot;px, 0)&quot;,k))}return Object.assign({},q,(t={},t[u]=O?S+&quot;px&quot;:&quot;&quot;,t[M]=E?_+&quot;px&quot;:&quot;&quot;,t.transform=&quot;&quot;,t))}function Da(e){var t=e.state,n=e.options,r=n.gpuAcceleration,i=r===void 0?!0:r,o=n.adaptive,a=o===void 0?!0:o,s=n.roundOffsets,c=s===void 0?!0:s,f={placement:Te(t.placement),variation:gt(t.placement),popper:t.elements.popper,popperRect:t.rects.popper,gpuAcceleration:i,isFixed:t.options.strategy===&quot;fixed&quot;};t.modifiersData.popperOffsets!=null&amp;&amp;(t.styles.popper=Object.assign({},t.styles.popper,Br(Object.assign({},f,{offsets:t.modifiersData.popperOffsets,position:t.options.strategy,adaptive:a,roundOffsets:c})))),t.modifiersData.arrow!=null&amp;&amp;(t.styles.arrow=Object.assign({},t.styles.arrow,Br(Object.assign({},f,{offsets:t.modifiersData.arrow,position:&quot;absolute&quot;,adaptive:!1,roundOffsets:c})))),t.attributes.popper=Object.assign({},t.attributes.popper,{&quot;data-popper-placement&quot;:t.placement})}const Na={name:&quot;computeStyles&quot;,enabled:!0,phase:&quot;beforeWrite&quot;,fn:Da,data:{}};var Vt={passive:!0};function La(e){var t=e.state,n=e.instance,r=e.options,i=r.scroll,o=i===void 0?!0:i,a=r.resize,s=a===void 0?!0:a,c=fe(t.elements.popper),f=[].concat(t.scrollParents.reference,t.scrollParents.popper);return o&amp;&amp;f.forEach(function(l){l.addEventListener(&quot;scroll&quot;,n.update,Vt)}),s&amp;&amp;c.addEventListener(&quot;resize&quot;,n.update,Vt),function(){o&amp;&amp;f.forEach(function(l){l.removeEventListener(&quot;scroll&quot;,n.update,Vt)}),s&amp;&amp;c.removeEventListener(&quot;resize&quot;,n.update,Vt)}}const Pa={name:&quot;eventListeners&quot;,enabled:!0,phase:&quot;write&quot;,fn:function(){},effect:La,data:{}};var ka={left:&quot;right&quot;,right:&quot;left&quot;,bottom:&quot;top&quot;,top:&quot;bottom&quot;};function en(e){return e.replace(/left|right|bottom|top/g,function(t){return ka[t]})}var Ba={start:&quot;end&quot;,end:&quot;start&quot;};function $r(e){return e.replace(/start|end/g,function(t){return Ba[t]})}function ar(e){var t=fe(e),n=t.pageXOffset,r=t.pageYOffset;return{scrollLeft:n,scrollTop:r}}function sr(e){return ht(We(e)).left+ar(e).scrollLeft}function $a(e,t){var n=fe(e),r=We(e),i=n.visualViewport,o=r.clientWidth,a=r.clientHeight,s=0,c=0;if(i){o=i.width,a=i.height;var f=wi();(f||!f&amp;&amp;t===&quot;fixed&quot;)&amp;&amp;(s=i.offsetLeft,c=i.offsetTop)}return{width:o,height:a,x:s+sr(e),y:c}}function ja(e){var t,n=We(e),r=ar(e),i=(t=e.ownerDocument)==null?void 0:t.body,o=Ze(n.scrollWidth,n.clientWidth,i?i.scrollWidth:0,i?i.clientWidth:0),a=Ze(n.scrollHeight,n.clientHeight,i?i.scrollHeight:0,i?i.clientHeight:0),s=-r.scrollLeft+sr(e),c=-r.scrollTop;return De(i||n).direction===&quot;rtl&quot;&amp;&amp;(s+=Ze(n.clientWidth,i?i.clientWidth:0)-o),{width:o,height:a,x:s,y:c}}function cr(e){var t=De(e),n=t.overflow,r=t.overflowX,i=t.overflowY;return/auto|scroll|overlay|hidden/.test(n+i+r)}function Mi(e){return[&quot;html&quot;,&quot;body&quot;,&quot;#document&quot;].indexOf(Me(e))&gt;=0?e.ownerDocument.body:_e(e)&amp;&amp;cr(e)?e:Mi(fn(e))}function Mt(e,t){var n;t===void 0&amp;&amp;(t=[]);var r=Mi(e),i=r===((n=e.ownerDocument)==null?void 0:n.body),o=fe(r),a=i?[o].concat(o.visualViewport||[],cr(r)?r:[]):r,s=t.concat(a);return i?s:s.concat(Mt(fn(a)))}function kn(e){return Object.assign({},e,{left:e.x,top:e.y,right:e.x+e.width,bottom:e.y+e.height})}function Ha(e,t){var n=ht(e,!1,t===&quot;fixed&quot;);return n.top=n.top+e.clientTop,n.left=n.left+e.clientLeft,n.bottom=n.top+e.clientHeight,n.right=n.left+e.clientWidth,n.width=e.clientWidth,n.height=e.clientHeight,n.x=n.left,n.y=n.top,n}function jr(e,t,n){return t===mi?kn($a(e,n)):it(t)?Ha(t,n):kn(ja(We(e)))}function Fa(e){var t=Mt(fn(e)),n=[&quot;absolute&quot;,&quot;fixed&quot;].indexOf(De(e).position)&gt;=0,r=n&amp;&amp;_e(e)?$t(e):e;return it(r)?t.filter(function(i){return it(i)&amp;&amp;Oi(i,r)&amp;&amp;Me(i)!==&quot;body&quot;}):[]}function Ua(e,t,n,r){var i=t===&quot;clippingParents&quot;?Fa(e):[].concat(t),o=[].concat(i,[n]),a=o[0],s=o.reduce(function(c,f){var l=jr(e,f,r);return c.top=Ze(l.top,c.top),c.right=rn(l.right,c.right),c.bottom=rn(l.bottom,c.bottom),c.left=Ze(l.left,c.left),c},jr(e,a,r));return s.width=s.right-s.left,s.height=s.bottom-s.top,s.x=s.left,s.y=s.top,s}function Ci(e){var t=e.reference,n=e.element,r=e.placement,i=r?Te(r):null,o=r?gt(r):null,a=t.x+t.width/2-n.width/2,s=t.y+t.height/2-n.height/2,c;switch(i){case ce:c={x:a,y:t.y-n.height};break;case be:c={x:a,y:t.y+t.height};break;case ye:c={x:t.x+t.width,y:s};break;case ue:c={x:t.x-n.width,y:s};break;default:c={x:t.x,y:t.y}}var f=i?or(i):null;if(f!=null){var l=f===&quot;y&quot;?&quot;height&quot;:&quot;width&quot;;switch(o){case dt:c[f]=c[f]-(t[l]/2-n[l]/2);break;case Dt:c[f]=c[f]+(t[l]/2-n[l]/2);break}}return c}function Nt(e,t){t===void 0&amp;&amp;(t={});var n=t,r=n.placement,i=r===void 0?e.placement:r,o=n.strategy,a=o===void 0?e.strategy:o,s=n.boundary,c=s===void 0?ua:s,f=n.rootBoundary,l=f===void 0?mi:f,v=n.elementContext,b=v===void 0?Et:v,_=n.altBoundary,A=_===void 0?!1:_,S=n.padding,h=S===void 0?0:S,E=Si(typeof h!=&quot;number&quot;?h:Ti(h,Bt)),O=b===Et?la:Et,M=e.rects.popper,u=e.elements[A?O:b],I=Ua(it(u)?u:u.contextElement||We(e.elements.popper),c,l,a),m=ht(e.elements.reference),L=Ci({reference:m,element:M,strategy:&quot;absolute&quot;,placement:i}),K=kn(Object.assign({},M,L)),P=b===Et?K:m,H={top:I.top-P.top+E.top,bottom:P.bottom-I.bottom+E.bottom,left:I.left-P.left+E.left,right:P.right-I.right+E.right},q=e.modifiersData.offset;if(b===Et&amp;&amp;q){var z=q[i];Object.keys(H).forEach(function(k){var U=[ye,be].indexOf(k)&gt;=0?1:-1,Y=[ce,be].indexOf(k)&gt;=0?&quot;y&quot;:&quot;x&quot;;H[k]+=z[Y]*U})}return H}function Wa(e,t){t===void 0&amp;&amp;(t={});var n=t,r=n.placement,i=n.boundary,o=n.rootBoundary,a=n.padding,s=n.flipVariations,c=n.allowedAutoPlacements,f=c===void 0?xi:c,l=gt(r),v=l?s?Pr:Pr.filter(function(A){return gt(A)===l}):Bt,b=v.filter(function(A){return f.indexOf(A)&gt;=0});b.length===0&amp;&amp;(b=v);var _=b.reduce(function(A,S){return A[S]=Nt(e,{placement:S,boundary:i,rootBoundary:o,padding:a})[Te(S)],A},{});return Object.keys(_).sort(function(A,S){return _[A]-_[S]})}function Ka(e){if(Te(e)===nr)return[];var t=en(e);return[$r(e),t,$r(t)]}function za(e){var t=e.state,n=e.options,r=e.name;if(!t.modifiersData[r]._skip){for(var i=n.mainAxis,o=i===void 0?!0:i,a=n.altAxis,s=a===void 0?!0:a,c=n.fallbackPlacements,f=n.padding,l=n.boundary,v=n.rootBoundary,b=n.altBoundary,_=n.flipVariations,A=_===void 0?!0:_,S=n.allowedAutoPlacements,h=t.options.placement,E=Te(h),O=E===h,M=c||(O||!A?[en(h)]:Ka(h)),u=[h].concat(M).reduce(function(se,G){return se.concat(Te(G)===nr?Wa(t,{placement:G,boundary:l,rootBoundary:v,padding:f,flipVariations:A,allowedAutoPlacements:S}):G)},[]),I=t.rects.reference,m=t.rects.popper,L=new Map,K=!0,P=u[0],H=0;H&lt;u.length;H++){var q=u[H],z=Te(q),k=gt(q)===dt,U=[ce,be].indexOf(z)&gt;=0,Y=U?&quot;width&quot;:&quot;height&quot;,te=Nt(t,{placement:q,boundary:l,rootBoundary:v,altBoundary:b,padding:f}),p=U?k?ye:ue:k?be:ce;I[Y]&gt;m[Y]&amp;&amp;(p=en(p));var y=en(p),C=[];if(o&amp;&amp;C.push(te[z]&lt;=0),s&amp;&amp;C.push(te[p]&lt;=0,te[y]&lt;=0),C.every(function(se){return se})){P=q,K=!1;break}L.set(q,C)}if(K)for(var N=A?3:1,W=function(G){var Z=u.find(function(Ce){var de=L.get(Ce);if(de)return de.slice(0,G).every(function(Re){return Re})});if(Z)return P=Z,&quot;break&quot;},J=N;J&gt;0;J--){var re=W(J);if(re===&quot;break&quot;)break}t.placement!==P&amp;&amp;(t.modifiersData[r]._skip=!0,t.placement=P,t.reset=!0)}}const Va={name:&quot;flip&quot;,enabled:!0,phase:&quot;main&quot;,fn:za,requiresIfExists:[&quot;offset&quot;],data:{_skip:!1}};function Hr(e,t,n){return n===void 0&amp;&amp;(n={x:0,y:0}),{top:e.top-t.height-n.y,right:e.right-t.width+n.x,bottom:e.bottom-t.height+n.y,left:e.left-t.width-n.x}}function Fr(e){return[ce,ye,be,ue].some(function(t){return e[t]&gt;=0})}function qa(e){var t=e.state,n=e.name,r=t.rects.reference,i=t.rects.popper,o=t.modifiersData.preventOverflow,a=Nt(t,{elementContext:&quot;reference&quot;}),s=Nt(t,{altBoundary:!0}),c=Hr(a,r),f=Hr(s,i,o),l=Fr(c),v=Fr(f);t.modifiersData[n]={referenceClippingOffsets:c,popperEscapeOffsets:f,isReferenceHidden:l,hasPopperEscaped:v},t.attributes.popper=Object.assign({},t.attributes.popper,{&quot;data-popper-reference-hidden&quot;:l,&quot;data-popper-escaped&quot;:v})}const Ga={name:&quot;hide&quot;,enabled:!0,phase:&quot;main&quot;,requiresIfExists:[&quot;preventOverflow&quot;],fn:qa};function Xa(e,t,n){var r=Te(e),i=[ue,ce].indexOf(r)&gt;=0?-1:1,o=typeof n==&quot;function&quot;?n(Object.assign({},t,{placement:e})):n,a=o[0],s=o[1];return a=a||0,s=(s||0)*i,[ue,ye].indexOf(r)&gt;=0?{x:s,y:a}:{x:a,y:s}}function Ya(e){var t=e.state,n=e.options,r=e.name,i=n.offset,o=i===void 0?[0,0]:i,a=xi.reduce(function(l,v){return l[v]=Xa(v,t.rects,o),l},{}),s=a[t.placement],c=s.x,f=s.y;t.modifiersData.popperOffsets!=null&amp;&amp;(t.modifiersData.popperOffsets.x+=c,t.modifiersData.popperOffsets.y+=f),t.modifiersData[r]=a}const Ja={name:&quot;offset&quot;,enabled:!0,phase:&quot;main&quot;,requires:[&quot;popperOffsets&quot;],fn:Ya};function Za(e){var t=e.state,n=e.name;t.modifiersData[n]=Ci({reference:t.rects.reference,element:t.rects.popper,strategy:&quot;absolute&quot;,placement:t.placement})}const Qa={name:&quot;popperOffsets&quot;,enabled:!0,phase:&quot;read&quot;,fn:Za,data:{}};function es(e){return e===&quot;x&quot;?&quot;y&quot;:&quot;x&quot;}function ts(e){var t=e.state,n=e.options,r=e.name,i=n.mainAxis,o=i===void 0?!0:i,a=n.altAxis,s=a===void 0?!1:a,c=n.boundary,f=n.rootBoundary,l=n.altBoundary,v=n.padding,b=n.tether,_=b===void 0?!0:b,A=n.tetherOffset,S=A===void 0?0:A,h=Nt(t,{boundary:c,rootBoundary:f,padding:v,altBoundary:l}),E=Te(t.placement),O=gt(t.placement),M=!O,u=or(E),I=es(u),m=t.modifiersData.popperOffsets,L=t.rects.reference,K=t.rects.popper,P=typeof S==&quot;function&quot;?S(Object.assign({},t.rects,{placement:t.placement})):S,H=typeof P==&quot;number&quot;?{mainAxis:P,altAxis:P}:Object.assign({mainAxis:0,altAxis:0},P),q=t.modifiersData.offset?t.modifiersData.offset[t.placement]:null,z={x:0,y:0};if(m){if(o){var k,U=u===&quot;y&quot;?ce:ue,Y=u===&quot;y&quot;?be:ye,te=u===&quot;y&quot;?&quot;height&quot;:&quot;width&quot;,p=m[u],y=p+h[U],C=p-h[Y],N=_?-K[te]/2:0,W=O===dt?L[te]:K[te],J=O===dt?-K[te]:-L[te],re=t.elements.arrow,se=_&amp;&amp;re?ir(re):{width:0,height:0},G=t.modifiersData[&quot;arrow#persistent&quot;]?t.modifiersData[&quot;arrow#persistent&quot;].padding:Ai(),Z=G[U],Ce=G[Y],de=Tt(0,L[te],se[te]),Re=M?L[te]/2-N-de-Z-H.mainAxis:W-de-Z-H.mainAxis,Oe=M?-L[te]/2+N+de+Ce+H.mainAxis:J+de+Ce+H.mainAxis,Le=t.elements.arrow&amp;&amp;$t(t.elements.arrow),st=Le?u===&quot;y&quot;?Le.clientTop||0:Le.clientLeft||0:0,ze=(k=q==null?void 0:q[u])!=null?k:0,Ie=p+Re-ze-st,Ve=p+Oe-ze,ie=Tt(_?rn(y,Ie):y,p,_?Ze(C,Ve):C);m[u]=ie,z[u]=ie-p}if(s){var qe,Pe=u===&quot;x&quot;?ce:ue,T=u===&quot;x&quot;?be:ye,pe=m[I],V=I===&quot;y&quot;?&quot;height&quot;:&quot;width&quot;,$=pe+h[Pe],he=pe-h[T],le=[ce,ue].indexOf(E)!==-1,ke=(qe=q==null?void 0:q[I])!=null?qe:0,Be=le?$:pe-L[V]-K[V]-ke+H.altAxis,g=le?pe+L[V]+K[V]-ke-H.altAxis:he,x=_&amp;&amp;le?Aa(Be,pe,g):Tt(_?Be:$,pe,_?g:he);m[I]=x,z[I]=x-pe}t.modifiersData[r]=z}}const ns={name:&quot;preventOverflow&quot;,enabled:!0,phase:&quot;main&quot;,fn:ts,requiresIfExists:[&quot;offset&quot;]};function rs(e){return{scrollLeft:e.scrollLeft,scrollTop:e.scrollTop}}function is(e){return e===fe(e)||!_e(e)?ar(e):rs(e)}function os(e){var t=e.getBoundingClientRect(),n=pt(t.width)/e.offsetWidth||1,r=pt(t.height)/e.offsetHeight||1;return n!==1||r!==1}function as(e,t,n){n===void 0&amp;&amp;(n=!1);var r=_e(t),i=_e(t)&amp;&amp;os(t),o=We(t),a=ht(e,i,n),s={scrollLeft:0,scrollTop:0},c={x:0,y:0};return(r||!r&amp;&amp;!n)&amp;&amp;((Me(t)!==&quot;body&quot;||cr(o))&amp;&amp;(s=is(t)),_e(t)?(c=ht(t,!0),c.x+=t.clientLeft,c.y+=t.clientTop):o&amp;&amp;(c.x=sr(o))),{x:a.left+s.scrollLeft-c.x,y:a.top+s.scrollTop-c.y,width:a.width,height:a.height}}function ss(e){var t=new Map,n=new Set,r=[];e.forEach(function(o){t.set(o.name,o)});function i(o){n.add(o.name);var a=[].concat(o.requires||[],o.requiresIfExists||[]);a.forEach(function(s){if(!n.has(s)){var c=t.get(s);c&amp;&amp;i(c)}}),r.push(o)}return e.forEach(function(o){n.has(o.name)||i(o)}),r}function cs(e){var t=ss(e);return ma.reduce(function(n,r){return n.concat(t.filter(function(i){return i.phase===r}))},[])}function us(e){var t;return function(){return t||(t=new Promise(function(n){Promise.resolve().then(function(){t=void 0,n(e())})})),t}}function ls(e){var t=e.reduce(function(n,r){var i=n[r.name];return n[r.name]=i?Object.assign({},i,r,{options:Object.assign({},i.options,r.options),data:Object.assign({},i.data,r.data)}):r,n},{});return Object.keys(t).map(function(n){return t[n]})}var Ur={placement:&quot;bottom&quot;,modifiers:[],strategy:&quot;absolute&quot;};function Wr(){for(var e=arguments.length,t=new Array(e),n=0;n&lt;e;n++)t[n]=arguments[n];return!t.some(function(r){return!(r&amp;&amp;typeof r.getBoundingClientRect==&quot;function&quot;)})}function fs(e){e===void 0&amp;&amp;(e={});var t=e,n=t.defaultModifiers,r=n===void 0?[]:n,i=t.defaultOptions,o=i===void 0?Ur:i;return function(s,c,f){f===void 0&amp;&amp;(f=o);var l={placement:&quot;bottom&quot;,orderedModifiers:[],options:Object.assign({},Ur,o),modifiersData:{},elements:{reference:s,popper:c},attributes:{},styles:{}},v=[],b=!1,_={state:l,setOptions:function(E){var O=typeof E==&quot;function&quot;?E(l.options):E;S(),l.options=Object.assign({},o,l.options,O),l.scrollParents={reference:it(s)?Mt(s):s.contextElement?Mt(s.contextElement):[],popper:Mt(c)};var M=cs(ls([].concat(r,l.options.modifiers)));return l.orderedModifiers=M.filter(function(u){return u.enabled}),A(),_.update()},forceUpdate:function(){if(!b){var E=l.elements,O=E.reference,M=E.popper;if(Wr(O,M)){l.rects={reference:as(O,$t(M),l.options.strategy===&quot;fixed&quot;),popper:ir(M)},l.reset=!1,l.placement=l.options.placement,l.orderedModifiers.forEach(function(H){return l.modifiersData[H.name]=Object.assign({},H.data)});for(var u=0;u&lt;l.orderedModifiers.length;u++){if(l.reset===!0){l.reset=!1,u=-1;continue}var I=l.orderedModifiers[u],m=I.fn,L=I.options,K=L===void 0?{}:L,P=I.name;typeof m==&quot;function&quot;&amp;&amp;(l=m({state:l,options:K,name:P,instance:_})||l)}}}},update:us(function(){return new Promise(function(h){_.forceUpdate(),h(l)})}),destroy:function(){S(),b=!0}};if(!Wr(s,c))return _;_.setOptions(f).then(function(h){!b&amp;&amp;f.onFirstUpdate&amp;&amp;f.onFirstUpdate(h)});function A(){l.orderedModifiers.forEach(function(h){var E=h.name,O=h.options,M=O===void 0?{}:O,u=h.effect;if(typeof u==&quot;function&quot;){var I=u({state:l,name:E,instance:_,options:M}),m=function(){};v.push(I||m)}})}function S(){v.forEach(function(h){return h()}),v=[]}return _}}var ds=[Pa,Qa,Na,Ei,Ja,Va,ns,Ca,Ga],ps=fs({defaultModifiers:ds}),hs=&quot;tippy-box&quot;,Ri=&quot;tippy-content&quot;,gs=&quot;tippy-backdrop&quot;,Ii=&quot;tippy-arrow&quot;,Di=&quot;tippy-svg-arrow&quot;,Xe={passive:!0,capture:!0},Ni=function(){return document.body};function An(e,t,n){if(Array.isArray(e)){var r=e[t];return r??(Array.isArray(n)?n[t]:n)}return e}function ur(e,t){var n={}.toString.call(e);return n.indexOf(&quot;[object&quot;)===0&amp;&amp;n.indexOf(t+&quot;]&quot;)&gt;-1}function Li(e,t){return typeof e==&quot;function&quot;?e.apply(void 0,t):e}function Kr(e,t){if(t===0)return e;var n;return function(r){clearTimeout(n),n=setTimeout(function(){e(r)},t)}}function vs(e){return e.split(/\s+/).filter(Boolean)}function ft(e){return[].concat(e)}function zr(e,t){e.indexOf(t)===-1&amp;&amp;e.push(t)}function _s(e){return e.filter(function(t,n){return e.indexOf(t)===n})}function bs(e){return e.split(&quot;-&quot;)[0]}function on(e){return[].slice.call(e)}function Vr(e){return Object.keys(e).reduce(function(t,n){return e[n]!==void 0&amp;&amp;(t[n]=e[n]),t},{})}function Ct(){return document.createElement(&quot;div&quot;)}function dn(e){return[&quot;Element&quot;,&quot;Fragment&quot;].some(function(t){return ur(e,t)})}function ys(e){return ur(e,&quot;NodeList&quot;)}function ms(e){return ur(e,&quot;MouseEvent&quot;)}function xs(e){return!!(e&amp;&amp;e._tippy&amp;&amp;e._tippy.reference===e)}function Es(e){return dn(e)?[e]:ys(e)?on(e):Array.isArray(e)?e:on(document.querySelectorAll(e))}function Sn(e,t){e.forEach(function(n){n&amp;&amp;(n.style.transitionDuration=t+&quot;ms&quot;)})}function qr(e,t){e.forEach(function(n){n&amp;&amp;n.setAttribute(&quot;data-state&quot;,t)})}function ws(e){var t,n=ft(e),r=n[0];return r!=null&amp;&amp;(t=r.ownerDocument)!=null&amp;&amp;t.body?r.ownerDocument:document}function Os(e,t){var n=t.clientX,r=t.clientY;return e.every(function(i){var o=i.popperRect,a=i.popperState,s=i.props,c=s.interactiveBorder,f=bs(a.placement),l=a.modifiersData.offset;if(!l)return!0;var v=f===&quot;bottom&quot;?l.top.y:0,b=f===&quot;top&quot;?l.bottom.y:0,_=f===&quot;right&quot;?l.left.x:0,A=f===&quot;left&quot;?l.right.x:0,S=o.top-r+v&gt;c,h=r-o.bottom-b&gt;c,E=o.left-n+_&gt;c,O=n-o.right-A&gt;c;return S||h||E||O})}function Tn(e,t,n){var r=t+&quot;EventListener&quot;;[&quot;transitionend&quot;,&quot;webkitTransitionEnd&quot;].forEach(function(i){e[r](i,n)})}function Gr(e,t){for(var n=t;n;){var r;if(e.contains(n))return!0;n=n.getRootNode==null||(r=n.getRootNode())==null?void 0:r.host}return!1}var Se={isTouch:!1},Xr=0;function As(){Se.isTouch||(Se.isTouch=!0,window.performance&amp;&amp;document.addEventListener(&quot;mousemove&quot;,Pi))}function Pi(){var e=performance.now();e-Xr&lt;20&amp;&amp;(Se.isTouch=!1,document.removeEventListener(&quot;mousemove&quot;,Pi)),Xr=e}function Ss(){var e=document.activeElement;if(xs(e)){var t=e._tippy;e.blur&amp;&amp;!t.state.isVisible&amp;&amp;e.blur()}}function Ts(){document.addEventListener(&quot;touchstart&quot;,As,Xe),window.addEventListener(&quot;blur&quot;,Ss)}var Ms=typeof window&lt;&quot;u&quot;&amp;&amp;typeof document&lt;&quot;u&quot;,Cs=Ms?!!window.msCrypto:!1,Rs={animateFill:!1,followCursor:!1,inlinePositioning:!1,sticky:!1},Is={allowHTML:!1,animation:&quot;fade&quot;,arrow:!0,content:&quot;&quot;,inertia:!1,maxWidth:350,role:&quot;tooltip&quot;,theme:&quot;&quot;,zIndex:9999},xe=Object.assign({appendTo:Ni,aria:{content:&quot;auto&quot;,expanded:&quot;auto&quot;},delay:0,duration:[300,250],getReferenceClientRect:null,hideOnClick:!0,ignoreAttributes:!1,interactive:!1,interactiveBorder:2,interactiveDebounce:0,moveTransition:&quot;&quot;,offset:[0,10],onAfterUpdate:function(){},onBeforeUpdate:function(){},onCreate:function(){},onDestroy:function(){},onHidden:function(){},onHide:function(){},onMount:function(){},onShow:function(){},onShown:function(){},onTrigger:function(){},onUntrigger:function(){},onClickOutside:function(){},placement:&quot;top&quot;,plugins:[],popperOptions:{},render:null,showOnCreate:!1,touch:!0,trigger:&quot;mouseenter focus&quot;,triggerTarget:null},Rs,Is),Ds=Object.keys(xe),Ns=function(t){var n=Object.keys(t);n.forEach(function(r){xe[r]=t[r]})};function ki(e){var t=e.plugins||[],n=t.reduce(function(r,i){var o=i.name,a=i.defaultValue;if(o){var s;r[o]=e[o]!==void 0?e[o]:(s=xe[o])!=null?s:a}return r},{});return Object.assign({},e,n)}function Ls(e,t){var n=t?Object.keys(ki(Object.assign({},xe,{plugins:t}))):Ds,r=n.reduce(function(i,o){var a=(e.getAttribute(&quot;data-tippy-&quot;+o)||&quot;&quot;).trim();if(!a)return i;if(o===&quot;content&quot;)i[o]=a;else try{i[o]=JSON.parse(a)}catch{i[o]=a}return i},{});return r}function Yr(e,t){var n=Object.assign({},t,{content:Li(t.content,[e])},t.ignoreAttributes?{}:Ls(e,t.plugins));return n.aria=Object.assign({},xe.aria,n.aria),n.aria={expanded:n.aria.expanded===&quot;auto&quot;?t.interactive:n.aria.expanded,content:n.aria.content===&quot;auto&quot;?t.interactive?null:&quot;describedby&quot;:n.aria.content},n}var Ps=function(){return&quot;innerHTML&quot;};function Bn(e,t){e[Ps()]=t}function Jr(e){var t=Ct();return e===!0?t.className=Ii:(t.className=Di,dn(e)?t.appendChild(e):Bn(t,e)),t}function Zr(e,t){dn(t.content)?(Bn(e,&quot;&quot;),e.appendChild(t.content)):typeof t.content!=&quot;function&quot;&amp;&amp;(t.allowHTML?Bn(e,t.content):e.textContent=t.content)}function $n(e){var t=e.firstElementChild,n=on(t.children);return{box:t,content:n.find(function(r){return r.classList.contains(Ri)}),arrow:n.find(function(r){return r.classList.contains(Ii)||r.classList.contains(Di)}),backdrop:n.find(function(r){return r.classList.contains(gs)})}}function Bi(e){var t=Ct(),n=Ct();n.className=hs,n.setAttribute(&quot;data-state&quot;,&quot;hidden&quot;),n.setAttribute(&quot;tabindex&quot;,&quot;-1&quot;);var r=Ct();r.className=Ri,r.setAttribute(&quot;data-state&quot;,&quot;hidden&quot;),Zr(r,e.props),t.appendChild(n),n.appendChild(r),i(e.props,e.props);function i(o,a){var s=$n(t),c=s.box,f=s.content,l=s.arrow;a.theme?c.setAttribute(&quot;data-theme&quot;,a.theme):c.removeAttribute(&quot;data-theme&quot;),typeof a.animation==&quot;string&quot;?c.setAttribute(&quot;data-animation&quot;,a.animation):c.removeAttribute(&quot;data-animation&quot;),a.inertia?c.setAttribute(&quot;data-inertia&quot;,&quot;&quot;):c.removeAttribute(&quot;data-inertia&quot;),c.style.maxWidth=typeof a.maxWidth==&quot;number&quot;?a.maxWidth+&quot;px&quot;:a.maxWidth,a.role?c.setAttribute(&quot;role&quot;,a.role):c.removeAttribute(&quot;role&quot;),(o.content!==a.content||o.allowHTML!==a.allowHTML)&amp;&amp;Zr(f,e.props),a.arrow?l?o.arrow!==a.arrow&amp;&amp;(c.removeChild(l),c.appendChild(Jr(a.arrow))):c.appendChild(Jr(a.arrow)):l&amp;&amp;c.removeChild(l)}return{popper:t,onUpdate:i}}Bi.$$tippy=!0;var ks=1,qt=[],Mn=[];function Bs(e,t){var n=Yr(e,Object.assign({},xe,ki(Vr(t)))),r,i,o,a=!1,s=!1,c=!1,f=!1,l,v,b,_=[],A=Kr(Ie,n.interactiveDebounce),S,h=ks++,E=null,O=_s(n.plugins),M={isEnabled:!0,isVisible:!1,isDestroyed:!1,isMounted:!1,isShown:!1},u={id:h,reference:e,popper:Ct(),popperInstance:E,props:n,state:M,plugins:O,clearDelayTimeouts:Be,setProps:g,setContent:x,show:D,hide:j,hideWithInteractivity:ne,enable:le,disable:ke,unmount:me,destroy:En};if(!n.render)return u;var I=n.render(u),m=I.popper,L=I.onUpdate;m.setAttribute(&quot;data-tippy-root&quot;,&quot;&quot;),m.id=&quot;tippy-&quot;+u.id,u.popper=m,e._tippy=u,m._tippy=u;var K=O.map(function(d){return d.fn(u)}),P=e.hasAttribute(&quot;aria-expanded&quot;);return Le(),N(),p(),y(&quot;onCreate&quot;,[u]),n.showOnCreate&amp;&amp;$(),m.addEventListener(&quot;mouseenter&quot;,function(){u.props.interactive&amp;&amp;u.state.isVisible&amp;&amp;u.clearDelayTimeouts()}),m.addEventListener(&quot;mouseleave&quot;,function(){u.props.interactive&amp;&amp;u.props.trigger.indexOf(&quot;mouseenter&quot;)&gt;=0&amp;&amp;U().addEventListener(&quot;mousemove&quot;,A)}),u;function H(){var d=u.props.touch;return Array.isArray(d)?d:[d,0]}function q(){return H()[0]===&quot;hold&quot;}function z(){var d;return!!((d=u.props.render)!=null&amp;&amp;d.$$tippy)}function k(){return S||e}function U(){var d=k().parentNode;return d?ws(d):document}function Y(){return $n(m)}function te(d){return u.state.isMounted&amp;&amp;!u.state.isVisible||Se.isTouch||l&amp;&amp;l.type===&quot;focus&quot;?0:An(u.props.delay,d?0:1,xe.delay)}function p(d){d===void 0&amp;&amp;(d=!1),m.style.pointerEvents=u.props.interactive&amp;&amp;!d?&quot;&quot;:&quot;none&quot;,m.style.zIndex=&quot;&quot;+u.props.zIndex}function y(d,w,R){if(R===void 0&amp;&amp;(R=!0),K.forEach(function(B){B[d]&amp;&amp;B[d].apply(B,w)}),R){var F;(F=u.props)[d].apply(F,w)}}function C(){var d=u.props.aria;if(d.content){var w=&quot;aria-&quot;+d.content,R=m.id,F=ft(u.props.triggerTarget||e);F.forEach(function(B){var oe=B.getAttribute(w);if(u.state.isVisible)B.setAttribute(w,oe?oe+&quot; &quot;+R:R);else{var ge=oe&amp;&amp;oe.replace(R,&quot;&quot;).trim();ge?B.setAttribute(w,ge):B.removeAttribute(w)}})}}function N(){if(!(P||!u.props.aria.expanded)){var d=ft(u.props.triggerTarget||e);d.forEach(function(w){u.props.interactive?w.setAttribute(&quot;aria-expanded&quot;,u.state.isVisible&amp;&amp;w===k()?&quot;true&quot;:&quot;false&quot;):w.removeAttribute(&quot;aria-expanded&quot;)})}}function W(){U().removeEventListener(&quot;mousemove&quot;,A),qt=qt.filter(function(d){return d!==A})}function J(d){if(!(Se.isTouch&amp;&amp;(c||d.type===&quot;mousedown&quot;))){var w=d.composedPath&amp;&amp;d.composedPath()[0]||d.target;if(!(u.props.interactive&amp;&amp;Gr(m,w))){if(ft(u.props.triggerTarget||e).some(function(R){return Gr(R,w)})){if(Se.isTouch||u.state.isVisible&amp;&amp;u.props.trigger.indexOf(&quot;click&quot;)&gt;=0)return}else y(&quot;onClickOutside&quot;,[u,d]);u.props.hideOnClick===!0&amp;&amp;(u.clearDelayTimeouts(),u.hide(),s=!0,setTimeout(function(){s=!1}),u.state.isMounted||Z())}}}function re(){c=!0}function se(){c=!1}function G(){var d=U();d.addEventListener(&quot;mousedown&quot;,J,!0),d.addEventListener(&quot;touchend&quot;,J,Xe),d.addEventListener(&quot;touchstart&quot;,se,Xe),d.addEventListener(&quot;touchmove&quot;,re,Xe)}function Z(){var d=U();d.removeEventListener(&quot;mousedown&quot;,J,!0),d.removeEventListener(&quot;touchend&quot;,J,Xe),d.removeEventListener(&quot;touchstart&quot;,se,Xe),d.removeEventListener(&quot;touchmove&quot;,re,Xe)}function Ce(d,w){Re(d,function(){!u.state.isVisible&amp;&amp;m.parentNode&amp;&amp;m.parentNode.contains(m)&amp;&amp;w()})}function de(d,w){Re(d,w)}function Re(d,w){var R=Y().box;function F(B){B.target===R&amp;&amp;(Tn(R,&quot;remove&quot;,F),w())}if(d===0)return w();Tn(R,&quot;remove&quot;,v),Tn(R,&quot;add&quot;,F),v=F}function Oe(d,w,R){R===void 0&amp;&amp;(R=!1);var F=ft(u.props.triggerTarget||e);F.forEach(function(B){B.addEventListener(d,w,R),_.push({node:B,eventType:d,handler:w,options:R})})}function Le(){q()&amp;&amp;(Oe(&quot;touchstart&quot;,ze,{passive:!0}),Oe(&quot;touchend&quot;,Ve,{passive:!0})),vs(u.props.trigger).forEach(function(d){if(d!==&quot;manual&quot;)switch(Oe(d,ze),d){case&quot;mouseenter&quot;:Oe(&quot;mouseleave&quot;,Ve);break;case&quot;focus&quot;:Oe(Cs?&quot;focusout&quot;:&quot;blur&quot;,ie);break;case&quot;focusin&quot;:Oe(&quot;focusout&quot;,ie);break}})}function st(){_.forEach(function(d){var w=d.node,R=d.eventType,F=d.handler,B=d.options;w.removeEventListener(R,F,B)}),_=[]}function ze(d){var w,R=!1;if(!(!u.state.isEnabled||qe(d)||s)){var F=((w=l)==null?void 0:w.type)===&quot;focus&quot;;l=d,S=d.currentTarget,N(),!u.state.isVisible&amp;&amp;ms(d)&amp;&amp;qt.forEach(function(B){return B(d)}),d.type===&quot;click&quot;&amp;&amp;(u.props.trigger.indexOf(&quot;mouseenter&quot;)&lt;0||a)&amp;&amp;u.props.hideOnClick!==!1&amp;&amp;u.state.isVisible?R=!0:$(d),d.type===&quot;click&quot;&amp;&amp;(a=!R),R&amp;&amp;!F&amp;&amp;he(d)}}function Ie(d){var w=d.target,R=k().contains(w)||m.contains(w);if(!(d.type===&quot;mousemove&quot;&amp;&amp;R)){var F=V().concat(m).map(function(B){var oe,ge=B._tippy,ct=(oe=ge.popperInstance)==null?void 0:oe.state;return ct?{popperRect:B.getBoundingClientRect(),popperState:ct,props:n}:null}).filter(Boolean);Os(F,d)&amp;&amp;(W(),he(d))}}function Ve(d){var w=qe(d)||u.props.trigger.indexOf(&quot;click&quot;)&gt;=0&amp;&amp;a;if(!w){if(u.props.interactive){u.hideWithInteractivity(d);return}he(d)}}function ie(d){u.props.trigger.indexOf(&quot;focusin&quot;)&lt;0&amp;&amp;d.target!==k()||u.props.interactive&amp;&amp;d.relatedTarget&amp;&amp;m.contains(d.relatedTarget)||he(d)}function qe(d){return Se.isTouch?q()!==d.type.indexOf(&quot;touch&quot;)&gt;=0:!1}function Pe(){T();var d=u.props,w=d.popperOptions,R=d.placement,F=d.offset,B=d.getReferenceClientRect,oe=d.moveTransition,ge=z()?$n(m).arrow:null,ct=B?{getBoundingClientRect:B,contextElement:B.contextElement||k()}:e,Lr={name:&quot;$$tippy&quot;,enabled:!0,phase:&quot;beforeWrite&quot;,requires:[&quot;computeStyles&quot;],fn:function(Kt){var ut=Kt.state;if(z()){var ca=Y(),On=ca.box;[&quot;placement&quot;,&quot;reference-hidden&quot;,&quot;escaped&quot;].forEach(function(zt){zt===&quot;placement&quot;?On.setAttribute(&quot;data-placement&quot;,ut.placement):ut.attributes.popper[&quot;data-popper-&quot;+zt]?On.setAttribute(&quot;data-&quot;+zt,&quot;&quot;):On.removeAttribute(&quot;data-&quot;+zt)}),ut.attributes.popper={}}}},Ge=[{name:&quot;offset&quot;,options:{offset:F}},{name:&quot;preventOverflow&quot;,options:{padding:{top:2,bottom:2,left:5,right:5}}},{name:&quot;flip&quot;,options:{padding:5}},{name:&quot;computeStyles&quot;,options:{adaptive:!oe}},Lr];z()&amp;&amp;ge&amp;&amp;Ge.push({name:&quot;arrow&quot;,options:{element:ge,padding:3}}),Ge.push.apply(Ge,(w==null?void 0:w.modifiers)||[]),u.popperInstance=ps(ct,m,Object.assign({},w,{placement:R,onFirstUpdate:b,modifiers:Ge}))}function T(){u.popperInstance&amp;&amp;(u.popperInstance.destroy(),u.popperInstance=null)}function pe(){var d=u.props.appendTo,w,R=k();u.props.interactive&amp;&amp;d===Ni||d===&quot;parent&quot;?w=R.parentNode:w=Li(d,[R]),w.contains(m)||w.appendChild(m),u.state.isMounted=!0,Pe()}function V(){return on(m.querySelectorAll(&quot;[data-tippy-root]&quot;))}function $(d){u.clearDelayTimeouts(),d&amp;&amp;y(&quot;onTrigger&quot;,[u,d]),G();var w=te(!0),R=H(),F=R[0],B=R[1];Se.isTouch&amp;&amp;F===&quot;hold&quot;&amp;&amp;B&amp;&amp;(w=B),w?r=setTimeout(function(){u.show()},w):u.show()}function he(d){if(u.clearDelayTimeouts(),y(&quot;onUntrigger&quot;,[u,d]),!u.state.isVisible){Z();return}if(!(u.props.trigger.indexOf(&quot;mouseenter&quot;)&gt;=0&amp;&amp;u.props.trigger.indexOf(&quot;click&quot;)&gt;=0&amp;&amp;[&quot;mouseleave&quot;,&quot;mousemove&quot;].indexOf(d.type)&gt;=0&amp;&amp;a)){var w=te(!1);w?i=setTimeout(function(){u.state.isVisible&amp;&amp;u.hide()},w):o=requestAnimationFrame(function(){u.hide()})}}function le(){u.state.isEnabled=!0}function ke(){u.hide(),u.state.isEnabled=!1}function Be(){clearTimeout(r),clearTimeout(i),cancelAnimationFrame(o)}function g(d){if(!u.state.isDestroyed){y(&quot;onBeforeUpdate&quot;,[u,d]),st();var w=u.props,R=Yr(e,Object.assign({},w,Vr(d),{ignoreAttributes:!0}));u.props=R,Le(),w.interactiveDebounce!==R.interactiveDebounce&amp;&amp;(W(),A=Kr(Ie,R.interactiveDebounce)),w.triggerTarget&amp;&amp;!R.triggerTarget?ft(w.triggerTarget).forEach(function(F){F.removeAttribute(&quot;aria-expanded&quot;)}):R.triggerTarget&amp;&amp;e.removeAttribute(&quot;aria-expanded&quot;),N(),p(),L&amp;&amp;L(w,R),u.popperInstance&amp;&amp;(Pe(),V().forEach(function(F){requestAnimationFrame(F._tippy.popperInstance.forceUpdate)})),y(&quot;onAfterUpdate&quot;,[u,d])}}function x(d){u.setProps({content:d})}function D(){var d=u.state.isVisible,w=u.state.isDestroyed,R=!u.state.isEnabled,F=Se.isTouch&amp;&amp;!u.props.touch,B=An(u.props.duration,0,xe.duration);if(!(d||w||R||F)&amp;&amp;!k().hasAttribute(&quot;disabled&quot;)&amp;&amp;(y(&quot;onShow&quot;,[u],!1),u.props.onShow(u)!==!1)){if(u.state.isVisible=!0,z()&amp;&amp;(m.style.visibility=&quot;visible&quot;),p(),G(),u.state.isMounted||(m.style.transition=&quot;none&quot;),z()){var oe=Y(),ge=oe.box,ct=oe.content;Sn([ge,ct],0)}b=function(){var Ge;if(!(!u.state.isVisible||f)){if(f=!0,m.offsetHeight,m.style.transition=u.props.moveTransition,z()&amp;&amp;u.props.animation){var wn=Y(),Kt=wn.box,ut=wn.content;Sn([Kt,ut],B),qr([Kt,ut],&quot;visible&quot;)}C(),N(),zr(Mn,u),(Ge=u.popperInstance)==null||Ge.forceUpdate(),y(&quot;onMount&quot;,[u]),u.props.animation&amp;&amp;z()&amp;&amp;de(B,function(){u.state.isShown=!0,y(&quot;onShown&quot;,[u])})}},pe()}}function j(){var d=!u.state.isVisible,w=u.state.isDestroyed,R=!u.state.isEnabled,F=An(u.props.duration,1,xe.duration);if(!(d||w||R)&amp;&amp;(y(&quot;onHide&quot;,[u],!1),u.props.onHide(u)!==!1)){if(u.state.isVisible=!1,u.state.isShown=!1,f=!1,a=!1,z()&amp;&amp;(m.style.visibility=&quot;hidden&quot;),W(),Z(),p(!0),z()){var B=Y(),oe=B.box,ge=B.content;u.props.animation&amp;&amp;(Sn([oe,ge],F),qr([oe,ge],&quot;hidden&quot;))}C(),N(),u.props.animation?z()&amp;&amp;Ce(F,u.unmount):u.unmount()}}function ne(d){U().addEventListener(&quot;mousemove&quot;,A),zr(qt,A),A(d)}function me(){u.state.isVisible&amp;&amp;u.hide(),u.state.isMounted&amp;&amp;(T(),V().forEach(function(d){d._tippy.unmount()}),m.parentNode&amp;&amp;m.parentNode.removeChild(m),Mn=Mn.filter(function(d){return d!==u}),u.state.isMounted=!1,y(&quot;onHidden&quot;,[u]))}function En(){u.state.isDestroyed||(u.clearDelayTimeouts(),u.unmount(),st(),delete e._tippy,u.state.isDestroyed=!0,y(&quot;onDestroy&quot;,[u]))}}function jt(e,t){t===void 0&amp;&amp;(t={});var n=xe.plugins.concat(t.plugins||[]);Ts();var r=Object.assign({},t,{plugins:n}),i=Es(e),o=i.reduce(function(a,s){var c=s&amp;&amp;Bs(s,r);return c&amp;&amp;a.push(c),a},[]);return dn(e)?o[0]:o}jt.defaultProps=xe;jt.setDefaultProps=Ns;jt.currentInput=Se;Object.assign({},Ei,{effect:function(t){var n=t.state,r={popper:{position:n.options.strategy,left:&quot;0&quot;,top:&quot;0&quot;,margin:&quot;0&quot;},arrow:{position:&quot;absolute&quot;},reference:{}};Object.assign(n.elements.popper.style,r.popper),n.styles=r,n.elements.arrow&amp;&amp;Object.assign(n.elements.arrow.style,r.arrow)}});jt.setDefaultProps({render:Bi});var jn=!1,Hn=!1,Qe=[],Fn=-1;function $s(e){js(e)}function js(e){Qe.includes(e)||Qe.push(e),Hs()}function $i(e){let t=Qe.indexOf(e);t!==-1&amp;&amp;t&gt;Fn&amp;&amp;Qe.splice(t,1)}function Hs(){!Hn&amp;&amp;!jn&amp;&amp;(jn=!0,queueMicrotask(Fs))}function Fs(){jn=!1,Hn=!0;for(let e=0;e&lt;Qe.length;e++)Qe[e](),Fn=e;Qe.length=0,Fn=-1,Hn=!1}var yt,ot,mt,ji,Un=!0;function Us(e){Un=!1,e(),Un=!0}function Ws(e){yt=e.reactive,mt=e.release,ot=t=&gt;e.effect(t,{scheduler:n=&gt;{Un?$s(n):n()}}),ji=e.raw}function Qr(e){ot=e}function Ks(e){let t=()=&gt;{};return[r=&gt;{let i=ot(r);return e._x_effects||(e._x_effects=new Set,e._x_runEffects=()=&gt;{e._x_effects.forEach(o=&gt;o())}),e._x_effects.add(i),t=()=&gt;{i!==void 0&amp;&amp;(e._x_effects.delete(i),mt(i))},i},()=&gt;{t()}]}function Hi(e,t){let n=!0,r,i=ot(()=&gt;{let o=e();JSON.stringify(o),n?r=o:queueMicrotask(()=&gt;{t(o,r),r=o}),n=!1});return()=&gt;mt(i)}var Fi=[],Ui=[],Wi=[];function zs(e){Wi.push(e)}function lr(e,t){typeof t==&quot;function&quot;?(e._x_cleanups||(e._x_cleanups=[]),e._x_cleanups.push(t)):(t=e,Ui.push(t))}function Ki(e){Fi.push(e)}function zi(e,t,n){e._x_attributeCleanups||(e._x_attributeCleanups={}),e._x_attributeCleanups[t]||(e._x_attributeCleanups[t]=[]),e._x_attributeCleanups[t].push(n)}function Vi(e,t){e._x_attributeCleanups&amp;&amp;Object.entries(e._x_attributeCleanups).forEach(([n,r])=&gt;{(t===void 0||t.includes(n))&amp;&amp;(r.forEach(i=&gt;i()),delete e._x_attributeCleanups[n])})}function Vs(e){if(e._x_cleanups)for(;e._x_cleanups.length;)e._x_cleanups.pop()()}var fr=new MutationObserver(gr),dr=!1;function pr(){fr.observe(document,{subtree:!0,childList:!0,attributes:!0,attributeOldValue:!0}),dr=!0}function qi(){qs(),fr.disconnect(),dr=!1}var wt=[];function qs(){let e=fr.takeRecords();wt.push(()=&gt;e.length&gt;0&amp;&amp;gr(e));let t=wt.length;queueMicrotask(()=&gt;{if(wt.length===t)for(;wt.length&gt;0;)wt.shift()()})}function ee(e){if(!dr)return e();qi();let t=e();return pr(),t}var hr=!1,an=[];function Gs(){hr=!0}function Xs(){hr=!1,gr(an),an=[]}function gr(e){if(hr){an=an.concat(e);return}let t=new Set,n=new Set,r=new Map,i=new Map;for(let o=0;o&lt;e.length;o++)if(!e[o].target._x_ignoreMutationObserver&amp;&amp;(e[o].type===&quot;childList&quot;&amp;&amp;(e[o].addedNodes.forEach(a=&gt;a.nodeType===1&amp;&amp;t.add(a)),e[o].removedNodes.forEach(a=&gt;a.nodeType===1&amp;&amp;n.add(a))),e[o].type===&quot;attributes&quot;)){let a=e[o].target,s=e[o].attributeName,c=e[o].oldValue,f=()=&gt;{r.has(a)||r.set(a,[]),r.get(a).push({name:s,value:a.getAttribute(s)})},l=()=&gt;{i.has(a)||i.set(a,[]),i.get(a).push(s)};a.hasAttribute(s)&amp;&amp;c===null?f():a.hasAttribute(s)?(l(),f()):l()}i.forEach((o,a)=&gt;{Vi(a,o)}),r.forEach((o,a)=&gt;{Fi.forEach(s=&gt;s(a,o))});for(let o of n)t.has(o)||Ui.forEach(a=&gt;a(o));t.forEach(o=&gt;{o._x_ignoreSelf=!0,o._x_ignore=!0});for(let o of t)n.has(o)||o.isConnected&amp;&amp;(delete o._x_ignoreSelf,delete o._x_ignore,Wi.forEach(a=&gt;a(o)),o._x_ignore=!0,o._x_ignoreSelf=!0);t.forEach(o=&gt;{delete o._x_ignoreSelf,delete o._x_ignore}),t=null,n=null,r=null,i=null}function Gi(e){return Ft(vt(e))}function Ht(e,t,n){return e._x_dataStack=[t,...vt(n||e)],()=&gt;{e._x_dataStack=e._x_dataStack.filter(r=&gt;r!==t)}}function vt(e){return e._x_dataStack?e._x_dataStack:typeof ShadowRoot==&quot;function&quot;&amp;&amp;e instanceof ShadowRoot?vt(e.host):e.parentNode?vt(e.parentNode):[]}function Ft(e){return new Proxy({objects:e},Ys)}var Ys={ownKeys({objects:e}){return Array.from(new Set(e.flatMap(t=&gt;Object.keys(t))))},has({objects:e},t){return t==Symbol.unscopables?!1:e.some(n=&gt;Object.prototype.hasOwnProperty.call(n,t)||Reflect.has(n,t))},get({objects:e},t,n){return t==&quot;toJSON&quot;?Js:Reflect.get(e.find(r=&gt;Reflect.has(r,t))||{},t,n)},set({objects:e},t,n,r){const i=e.find(a=&gt;Object.prototype.hasOwnProperty.call(a,t))||e[e.length-1],o=Object.getOwnPropertyDescriptor(i,t);return o!=null&amp;&amp;o.set&amp;&amp;(o!=null&amp;&amp;o.get)?Reflect.set(i,t,n,r):Reflect.set(i,t,n)}};function Js(){return Reflect.ownKeys(this).reduce((t,n)=&gt;(t[n]=Reflect.get(this,n),t),{})}function Xi(e){let t=r=&gt;typeof r==&quot;object&quot;&amp;&amp;!Array.isArray(r)&amp;&amp;r!==null,n=(r,i=&quot;&quot;)=&gt;{Object.entries(Object.getOwnPropertyDescriptors(r)).forEach(([o,{value:a,enumerable:s}])=&gt;{if(s===!1||a===void 0||typeof a==&quot;object&quot;&amp;&amp;a!==null&amp;&amp;a.__v_skip)return;let c=i===&quot;&quot;?o:`${i}.${o}`;typeof a==&quot;object&quot;&amp;&amp;a!==null&amp;&amp;a._x_interceptor?r[o]=a.initialize(e,c,o):t(a)&amp;&amp;a!==r&amp;&amp;!(a instanceof Element)&amp;&amp;n(a,c)})};return n(e)}function Yi(e,t=()=&gt;{}){let n={initialValue:void 0,_x_interceptor:!0,initialize(r,i,o){return e(this.initialValue,()=&gt;Zs(r,i),a=&gt;Wn(r,i,a),i,o)}};return t(n),r=&gt;{if(typeof r==&quot;object&quot;&amp;&amp;r!==null&amp;&amp;r._x_interceptor){let i=n.initialize.bind(n);n.initialize=(o,a,s)=&gt;{let c=r.initialize(o,a,s);return n.initialValue=c,i(o,a,s)}}else n.initialValue=r;return n}}function Zs(e,t){return t.split(&quot;.&quot;).reduce((n,r)=&gt;n[r],e)}function Wn(e,t,n){if(typeof t==&quot;string&quot;&amp;&amp;(t=t.split(&quot;.&quot;)),t.length===1)e[t[0]]=n;else{if(t.length===0)throw error;return e[t[0]]||(e[t[0]]={}),Wn(e[t[0]],t.slice(1),n)}}var Ji={};function we(e,t){Ji[e]=t}function Kn(e,t){return Object.entries(Ji).forEach(([n,r])=&gt;{let i=null;function o(){if(i)return i;{let[a,s]=ro(t);return i={interceptor:Yi,...a},lr(t,s),i}}Object.defineProperty(e,`$${n}`,{get(){return r(t,o())},enumerable:!1})}),e}function Qs(e,t,n,...r){try{return n(...r)}catch(i){Lt(i,e,t)}}function Lt(e,t,n=void 0){e=Object.assign(e??{message:&quot;No error message given.&quot;},{el:t,expression:n}),console.warn(`Alpine Expression Error: ${e.message}

${n?&#039;Expression: &quot;&#039;+n+`&quot;

`:&quot;&quot;}`,t),setTimeout(()=&gt;{throw e},0)}var tn=!0;function Zi(e){let t=tn;tn=!1;let n=e();return tn=t,n}function et(e,t,n={}){let r;return ae(e,t)(i=&gt;r=i,n),r}function ae(...e){return Qi(...e)}var Qi=eo;function ec(e){Qi=e}function eo(e,t){let n={};Kn(n,e);let r=[n,...vt(e)],i=typeof t==&quot;function&quot;?tc(r,t):rc(r,t,e);return Qs.bind(null,e,t,i)}function tc(e,t){return(n=()=&gt;{},{scope:r={},params:i=[]}={})=&gt;{let o=t.apply(Ft([r,...e]),i);sn(n,o)}}var Cn={};function nc(e,t){if(Cn[e])return Cn[e];let n=Object.getPrototypeOf(async function(){}).constructor,r=/^[\n\s]*if.*\(.*\)/.test(e.trim())||/^(let|const)\s/.test(e.trim())?`(async()=&gt;{ ${e} })()`:e,o=(()=&gt;{try{let a=new n([&quot;__self&quot;,&quot;scope&quot;],`with (scope) { __self.result = ${r} }; __self.finished = true; return __self.result;`);return Object.defineProperty(a,&quot;name&quot;,{value:`[Alpine] ${e}`}),a}catch(a){return Lt(a,t,e),Promise.resolve()}})();return Cn[e]=o,o}function rc(e,t,n){let r=nc(t,n);return(i=()=&gt;{},{scope:o={},params:a=[]}={})=&gt;{r.result=void 0,r.finished=!1;let s=Ft([o,...e]);if(typeof r==&quot;function&quot;){let c=r(r,s).catch(f=&gt;Lt(f,n,t));r.finished?(sn(i,r.result,s,a,n),r.result=void 0):c.then(f=&gt;{sn(i,f,s,a,n)}).catch(f=&gt;Lt(f,n,t)).finally(()=&gt;r.result=void 0)}}}function sn(e,t,n,r,i){if(tn&amp;&amp;typeof t==&quot;function&quot;){let o=t.apply(n,r);o instanceof Promise?o.then(a=&gt;sn(e,a,n,r)).catch(a=&gt;Lt(a,i,t)):e(o)}else typeof t==&quot;object&quot;&amp;&amp;t instanceof Promise?t.then(o=&gt;e(o)):e(t)}var vr=&quot;x-&quot;;function xt(e=&quot;&quot;){return vr+e}function ic(e){vr=e}var cn={};function Q(e,t){return cn[e]=t,{before(n){if(!cn[n]){console.warn(String.raw`Cannot find directive \`${n}\`. \`${e}\` will use the default order of execution`);return}const r=Je.indexOf(n);Je.splice(r&gt;=0?r:Je.indexOf(&quot;DEFAULT&quot;),0,e)}}}function oc(e){return Object.keys(cn).includes(e)}function _r(e,t,n){if(t=Array.from(t),e._x_virtualDirectives){let o=Object.entries(e._x_virtualDirectives).map(([s,c])=&gt;({name:s,value:c})),a=to(o);o=o.map(s=&gt;a.find(c=&gt;c.name===s.name)?{name:`x-bind:${s.name}`,value:`&quot;${s.value}&quot;`}:s),t=t.concat(o)}let r={};return t.map(ao((o,a)=&gt;r[o]=a)).filter(co).map(cc(r,n)).sort(uc).map(o=&gt;sc(e,o))}function to(e){return Array.from(e).map(ao()).filter(t=&gt;!co(t))}var zn=!1,St=new Map,no=Symbol();function ac(e){zn=!0;let t=Symbol();no=t,St.set(t,[]);let n=()=&gt;{for(;St.get(t).length;)St.get(t).shift()();St.delete(t)},r=()=&gt;{zn=!1,n()};e(n),r()}function ro(e){let t=[],n=s=&gt;t.push(s),[r,i]=Ks(e);return t.push(i),[{Alpine:Wt,effect:r,cleanup:n,evaluateLater:ae.bind(ae,e),evaluate:et.bind(et,e)},()=&gt;t.forEach(s=&gt;s())]}function sc(e,t){let n=()=&gt;{},r=cn[t.type]||n,[i,o]=ro(e);zi(e,t.original,o);let a=()=&gt;{e._x_ignore||e._x_ignoreSelf||(r.inline&amp;&amp;r.inline(e,t,i),r=r.bind(r,e,t,i),zn?St.get(no).push(r):r())};return a.runCleanups=o,a}var io=(e,t)=&gt;({name:n,value:r})=&gt;(n.startsWith(e)&amp;&amp;(n=n.replace(e,t)),{name:n,value:r}),oo=e=&gt;e;function ao(e=()=&gt;{}){return({name:t,value:n})=&gt;{let{name:r,value:i}=so.reduce((o,a)=&gt;a(o),{name:t,value:n});return r!==t&amp;&amp;e(r,t),{name:r,value:i}}}var so=[];function br(e){so.push(e)}function co({name:e}){return uo().test(e)}var uo=()=&gt;new RegExp(`^${vr}([^:^.]+)\\b`);function cc(e,t){return({name:n,value:r})=&gt;{let i=n.match(uo()),o=n.match(/:([a-zA-Z0-9\-_:]+)/),a=n.match(/\.[^.\]]+(?=[^\]]*$)/g)||[],s=t||e[n]||n;return{type:i?i[1]:null,value:o?o[1]:null,modifiers:a.map(c=&gt;c.replace(&quot;.&quot;,&quot;&quot;)),expression:r,original:s}}}var Vn=&quot;DEFAULT&quot;,Je=[&quot;ignore&quot;,&quot;ref&quot;,&quot;data&quot;,&quot;id&quot;,&quot;anchor&quot;,&quot;bind&quot;,&quot;init&quot;,&quot;for&quot;,&quot;model&quot;,&quot;modelable&quot;,&quot;transition&quot;,&quot;show&quot;,&quot;if&quot;,Vn,&quot;teleport&quot;];function uc(e,t){let n=Je.indexOf(e.type)===-1?Vn:e.type,r=Je.indexOf(t.type)===-1?Vn:t.type;return Je.indexOf(n)-Je.indexOf(r)}function Rt(e,t,n={}){e.dispatchEvent(new CustomEvent(t,{detail:n,bubbles:!0,composed:!0,cancelable:!0}))}function He(e,t){if(typeof ShadowRoot==&quot;function&quot;&amp;&amp;e instanceof ShadowRoot){Array.from(e.children).forEach(i=&gt;He(i,t));return}let n=!1;if(t(e,()=&gt;n=!0),n)return;let r=e.firstElementChild;for(;r;)He(r,t),r=r.nextElementSibling}function ve(e,...t){console.warn(`Alpine Warning: ${e}`,...t)}var ei=!1;function lc(){ei&amp;&amp;ve(&quot;Alpine has already been initialized on this page. Calling Alpine.start() more than once can cause problems.&quot;),ei=!0,document.body||ve(&quot;Unable to initialize. Trying to load Alpine before `&lt;body&gt;` is available. Did you forget to add `defer` in Alpine&#039;s `&lt;script&gt;` tag?&quot;),Rt(document,&quot;alpine:init&quot;),Rt(document,&quot;alpine:initializing&quot;),pr(),zs(t=&gt;Ne(t,He)),lr(t=&gt;_o(t)),Ki((t,n)=&gt;{_r(t,n).forEach(r=&gt;r())});let e=t=&gt;!pn(t.parentElement,!0);Array.from(document.querySelectorAll(po().join(&quot;,&quot;))).filter(e).forEach(t=&gt;{Ne(t)}),Rt(document,&quot;alpine:initialized&quot;),setTimeout(()=&gt;{pc()})}var yr=[],lo=[];function fo(){return yr.map(e=&gt;e())}function po(){return yr.concat(lo).map(e=&gt;e())}function ho(e){yr.push(e)}function go(e){lo.push(e)}function pn(e,t=!1){return Ut(e,n=&gt;{if((t?po():fo()).some(i=&gt;n.matches(i)))return!0})}function Ut(e,t){if(e){if(t(e))return e;if(e._x_teleportBack&amp;&amp;(e=e._x_teleportBack),!!e.parentElement)return Ut(e.parentElement,t)}}function fc(e){return fo().some(t=&gt;e.matches(t))}var vo=[];function dc(e){vo.push(e)}function Ne(e,t=He,n=()=&gt;{}){ac(()=&gt;{t(e,(r,i)=&gt;{n(r,i),vo.forEach(o=&gt;o(r,i)),_r(r,r.attributes).forEach(o=&gt;o()),r._x_ignore&amp;&amp;i()})})}function _o(e,t=He){t(e,n=&gt;{Vi(n),Vs(n)})}function pc(){[[&quot;ui&quot;,&quot;dialog&quot;,[&quot;[x-dialog], [x-popover]&quot;]],[&quot;anchor&quot;,&quot;anchor&quot;,[&quot;[x-anchor]&quot;]],[&quot;sort&quot;,&quot;sort&quot;,[&quot;[x-sort]&quot;]]].forEach(([t,n,r])=&gt;{oc(n)||r.some(i=&gt;{if(document.querySelector(i))return ve(`found &quot;${i}&quot;, but missing ${t} plugin`),!0})})}var qn=[],mr=!1;function xr(e=()=&gt;{}){return queueMicrotask(()=&gt;{mr||setTimeout(()=&gt;{Gn()})}),new Promise(t=&gt;{qn.push(()=&gt;{e(),t()})})}function Gn(){for(mr=!1;qn.length;)qn.shift()()}function hc(){mr=!0}function Er(e,t){return Array.isArray(t)?ti(e,t.join(&quot; &quot;)):typeof t==&quot;object&quot;&amp;&amp;t!==null?gc(e,t):typeof t==&quot;function&quot;?Er(e,t()):ti(e,t)}function ti(e,t){let n=i=&gt;i.split(&quot; &quot;).filter(o=&gt;!e.classList.contains(o)).filter(Boolean),r=i=&gt;(e.classList.add(...i),()=&gt;{e.classList.remove(...i)});return t=t===!0?t=&quot;&quot;:t||&quot;&quot;,r(n(t))}function gc(e,t){let n=s=&gt;s.split(&quot; &quot;).filter(Boolean),r=Object.entries(t).flatMap(([s,c])=&gt;c?n(s):!1).filter(Boolean),i=Object.entries(t).flatMap(([s,c])=&gt;c?!1:n(s)).filter(Boolean),o=[],a=[];return i.forEach(s=&gt;{e.classList.contains(s)&amp;&amp;(e.classList.remove(s),a.push(s))}),r.forEach(s=&gt;{e.classList.contains(s)||(e.classList.add(s),o.push(s))}),()=&gt;{a.forEach(s=&gt;e.classList.add(s)),o.forEach(s=&gt;e.classList.remove(s))}}function hn(e,t){return typeof t==&quot;object&quot;&amp;&amp;t!==null?vc(e,t):_c(e,t)}function vc(e,t){let n={};return Object.entries(t).forEach(([r,i])=&gt;{n[r]=e.style[r],r.startsWith(&quot;--&quot;)||(r=bc(r)),e.style.setProperty(r,i)}),setTimeout(()=&gt;{e.style.length===0&amp;&amp;e.removeAttribute(&quot;style&quot;)}),()=&gt;{hn(e,n)}}function _c(e,t){let n=e.getAttribute(&quot;style&quot;,t);return e.setAttribute(&quot;style&quot;,t),()=&gt;{e.setAttribute(&quot;style&quot;,n||&quot;&quot;)}}function bc(e){return e.replace(/([a-z])([A-Z])/g,&quot;$1-$2&quot;).toLowerCase()}function Xn(e,t=()=&gt;{}){let n=!1;return function(){n?t.apply(this,arguments):(n=!0,e.apply(this,arguments))}}Q(&quot;transition&quot;,(e,{value:t,modifiers:n,expression:r},{evaluate:i})=&gt;{typeof r==&quot;function&quot;&amp;&amp;(r=i(r)),r!==!1&amp;&amp;(!r||typeof r==&quot;boolean&quot;?mc(e,n,t):yc(e,r,t))});function yc(e,t,n){bo(e,Er,&quot;&quot;),{enter:i=&gt;{e._x_transition.enter.during=i},&quot;enter-start&quot;:i=&gt;{e._x_transition.enter.start=i},&quot;enter-end&quot;:i=&gt;{e._x_transition.enter.end=i},leave:i=&gt;{e._x_transition.leave.during=i},&quot;leave-start&quot;:i=&gt;{e._x_transition.leave.start=i},&quot;leave-end&quot;:i=&gt;{e._x_transition.leave.end=i}}[n](t)}function mc(e,t,n){bo(e,hn);let r=!t.includes(&quot;in&quot;)&amp;&amp;!t.includes(&quot;out&quot;)&amp;&amp;!n,i=r||t.includes(&quot;in&quot;)||[&quot;enter&quot;].includes(n),o=r||t.includes(&quot;out&quot;)||[&quot;leave&quot;].includes(n);t.includes(&quot;in&quot;)&amp;&amp;!r&amp;&amp;(t=t.filter((E,O)=&gt;O&lt;t.indexOf(&quot;out&quot;))),t.includes(&quot;out&quot;)&amp;&amp;!r&amp;&amp;(t=t.filter((E,O)=&gt;O&gt;t.indexOf(&quot;out&quot;)));let a=!t.includes(&quot;opacity&quot;)&amp;&amp;!t.includes(&quot;scale&quot;),s=a||t.includes(&quot;opacity&quot;),c=a||t.includes(&quot;scale&quot;),f=s?0:1,l=c?Ot(t,&quot;scale&quot;,95)/100:1,v=Ot(t,&quot;delay&quot;,0)/1e3,b=Ot(t,&quot;origin&quot;,&quot;center&quot;),_=&quot;opacity, transform&quot;,A=Ot(t,&quot;duration&quot;,150)/1e3,S=Ot(t,&quot;duration&quot;,75)/1e3,h=&quot;cubic-bezier(0.4, 0.0, 0.2, 1)&quot;;i&amp;&amp;(e._x_transition.enter.during={transformOrigin:b,transitionDelay:`${v}s`,transitionProperty:_,transitionDuration:`${A}s`,transitionTimingFunction:h},e._x_transition.enter.start={opacity:f,transform:`scale(${l})`},e._x_transition.enter.end={opacity:1,transform:&quot;scale(1)&quot;}),o&amp;&amp;(e._x_transition.leave.during={transformOrigin:b,transitionDelay:`${v}s`,transitionProperty:_,transitionDuration:`${S}s`,transitionTimingFunction:h},e._x_transition.leave.start={opacity:1,transform:&quot;scale(1)&quot;},e._x_transition.leave.end={opacity:f,transform:`scale(${l})`})}function bo(e,t,n={}){e._x_transition||(e._x_transition={enter:{during:n,start:n,end:n},leave:{during:n,start:n,end:n},in(r=()=&gt;{},i=()=&gt;{}){Yn(e,t,{during:this.enter.during,start:this.enter.start,end:this.enter.end},r,i)},out(r=()=&gt;{},i=()=&gt;{}){Yn(e,t,{during:this.leave.during,start:this.leave.start,end:this.leave.end},r,i)}})}window.Element.prototype._x_toggleAndCascadeWithTransitions=function(e,t,n,r){const i=document.visibilityState===&quot;visible&quot;?requestAnimationFrame:setTimeout;let o=()=&gt;i(n);if(t){e._x_transition&amp;&amp;(e._x_transition.enter||e._x_transition.leave)?e._x_transition.enter&amp;&amp;(Object.entries(e._x_transition.enter.during).length||Object.entries(e._x_transition.enter.start).length||Object.entries(e._x_transition.enter.end).length)?e._x_transition.in(n):o():e._x_transition?e._x_transition.in(n):o();return}e._x_hidePromise=e._x_transition?new Promise((a,s)=&gt;{e._x_transition.out(()=&gt;{},()=&gt;a(r)),e._x_transitioning&amp;&amp;e._x_transitioning.beforeCancel(()=&gt;s({isFromCancelledTransition:!0}))}):Promise.resolve(r),queueMicrotask(()=&gt;{let a=yo(e);a?(a._x_hideChildren||(a._x_hideChildren=[]),a._x_hideChildren.push(e)):i(()=&gt;{let s=c=&gt;{let f=Promise.all([c._x_hidePromise,...(c._x_hideChildren||[]).map(s)]).then(([l])=&gt;l());return delete c._x_hidePromise,delete c._x_hideChildren,f};s(e).catch(c=&gt;{if(!c.isFromCancelledTransition)throw c})})})};function yo(e){let t=e.parentNode;if(t)return t._x_hidePromise?t:yo(t)}function Yn(e,t,{during:n,start:r,end:i}={},o=()=&gt;{},a=()=&gt;{}){if(e._x_transitioning&amp;&amp;e._x_transitioning.cancel(),Object.keys(n).length===0&amp;&amp;Object.keys(r).length===0&amp;&amp;Object.keys(i).length===0){o(),a();return}let s,c,f;xc(e,{start(){s=t(e,r)},during(){c=t(e,n)},before:o,end(){s(),f=t(e,i)},after:a,cleanup(){c(),f()}})}function xc(e,t){let n,r,i,o=Xn(()=&gt;{ee(()=&gt;{n=!0,r||t.before(),i||(t.end(),Gn()),t.after(),e.isConnected&amp;&amp;t.cleanup(),delete e._x_transitioning})});e._x_transitioning={beforeCancels:[],beforeCancel(a){this.beforeCancels.push(a)},cancel:Xn(function(){for(;this.beforeCancels.length;)this.beforeCancels.shift()();o()}),finish:o},ee(()=&gt;{t.start(),t.during()}),hc(),requestAnimationFrame(()=&gt;{if(n)return;let a=Number(getComputedStyle(e).transitionDuration.replace(/,.*/,&quot;&quot;).replace(&quot;s&quot;,&quot;&quot;))*1e3,s=Number(getComputedStyle(e).transitionDelay.replace(/,.*/,&quot;&quot;).replace(&quot;s&quot;,&quot;&quot;))*1e3;a===0&amp;&amp;(a=Number(getComputedStyle(e).animationDuration.replace(&quot;s&quot;,&quot;&quot;))*1e3),ee(()=&gt;{t.before()}),r=!0,requestAnimationFrame(()=&gt;{n||(ee(()=&gt;{t.end()}),Gn(),setTimeout(e._x_transitioning.finish,a+s),i=!0)})})}function Ot(e,t,n){if(e.indexOf(t)===-1)return n;const r=e[e.indexOf(t)+1];if(!r||t===&quot;scale&quot;&amp;&amp;isNaN(r))return n;if(t===&quot;duration&quot;||t===&quot;delay&quot;){let i=r.match(/([0-9]+)ms/);if(i)return i[1]}return t===&quot;origin&quot;&amp;&amp;[&quot;top&quot;,&quot;right&quot;,&quot;left&quot;,&quot;center&quot;,&quot;bottom&quot;].includes(e[e.indexOf(t)+2])?[r,e[e.indexOf(t)+2]].join(&quot; &quot;):r}var Fe=!1;function Ke(e,t=()=&gt;{}){return(...n)=&gt;Fe?t(...n):e(...n)}function Ec(e){return(...t)=&gt;Fe&amp;&amp;e(...t)}var mo=[];function gn(e){mo.push(e)}function wc(e,t){mo.forEach(n=&gt;n(e,t)),Fe=!0,xo(()=&gt;{Ne(t,(n,r)=&gt;{r(n,()=&gt;{})})}),Fe=!1}var Jn=!1;function Oc(e,t){t._x_dataStack||(t._x_dataStack=e._x_dataStack),Fe=!0,Jn=!0,xo(()=&gt;{Ac(t)}),Fe=!1,Jn=!1}function Ac(e){let t=!1;Ne(e,(r,i)=&gt;{He(r,(o,a)=&gt;{if(t&amp;&amp;fc(o))return a();t=!0,i(o,a)})})}function xo(e){let t=ot;Qr((n,r)=&gt;{let i=t(n);return mt(i),()=&gt;{}}),e(),Qr(t)}function Eo(e,t,n,r=[]){switch(e._x_bindings||(e._x_bindings=yt({})),e._x_bindings[t]=n,t=r.includes(&quot;camel&quot;)?Nc(t):t,t){case&quot;value&quot;:Sc(e,n);break;case&quot;style&quot;:Mc(e,n);break;case&quot;class&quot;:Tc(e,n);break;case&quot;selected&quot;:case&quot;checked&quot;:Cc(e,t,n);break;default:wo(e,t,n);break}}function Sc(e,t){if(e.type===&quot;radio&quot;)e.attributes.value===void 0&amp;&amp;(e.value=t),window.fromModel&amp;&amp;(typeof t==&quot;boolean&quot;?e.checked=nn(e.value)===t:e.checked=ni(e.value,t));else if(e.type===&quot;checkbox&quot;)Number.isInteger(t)?e.value=t:!Array.isArray(t)&amp;&amp;typeof t!=&quot;boolean&quot;&amp;&amp;![null,void 0].includes(t)?e.value=String(t):Array.isArray(t)?e.checked=t.some(n=&gt;ni(n,e.value)):e.checked=!!t;else if(e.tagName===&quot;SELECT&quot;)Dc(e,t);else{if(e.value===t)return;e.value=t===void 0?&quot;&quot;:t}}function Tc(e,t){e._x_undoAddedClasses&amp;&amp;e._x_undoAddedClasses(),e._x_undoAddedClasses=Er(e,t)}function Mc(e,t){e._x_undoAddedStyles&amp;&amp;e._x_undoAddedStyles(),e._x_undoAddedStyles=hn(e,t)}function Cc(e,t,n){wo(e,t,n),Ic(e,t,n)}function wo(e,t,n){[null,void 0,!1].includes(n)&amp;&amp;Lc(t)?e.removeAttribute(t):(Oo(t)&amp;&amp;(n=t),Rc(e,t,n))}function Rc(e,t,n){e.getAttribute(t)!=n&amp;&amp;e.setAttribute(t,n)}function Ic(e,t,n){e[t]!==n&amp;&amp;(e[t]=n)}function Dc(e,t){const n=[].concat(t).map(r=&gt;r+&quot;&quot;);Array.from(e.options).forEach(r=&gt;{r.selected=n.includes(r.value)})}function Nc(e){return e.toLowerCase().replace(/-(\w)/g,(t,n)=&gt;n.toUpperCase())}function ni(e,t){return e==t}function nn(e){return[1,&quot;1&quot;,&quot;true&quot;,&quot;on&quot;,&quot;yes&quot;,!0].includes(e)?!0:[0,&quot;0&quot;,&quot;false&quot;,&quot;off&quot;,&quot;no&quot;,!1].includes(e)?!1:e?!!e:null}function Oo(e){return[&quot;disabled&quot;,&quot;checked&quot;,&quot;required&quot;,&quot;readonly&quot;,&quot;open&quot;,&quot;selected&quot;,&quot;autofocus&quot;,&quot;itemscope&quot;,&quot;multiple&quot;,&quot;novalidate&quot;,&quot;allowfullscreen&quot;,&quot;allowpaymentrequest&quot;,&quot;formnovalidate&quot;,&quot;autoplay&quot;,&quot;controls&quot;,&quot;loop&quot;,&quot;muted&quot;,&quot;playsinline&quot;,&quot;default&quot;,&quot;ismap&quot;,&quot;reversed&quot;,&quot;async&quot;,&quot;defer&quot;,&quot;nomodule&quot;].includes(e)}function Lc(e){return![&quot;aria-pressed&quot;,&quot;aria-checked&quot;,&quot;aria-expanded&quot;,&quot;aria-selected&quot;].includes(e)}function Pc(e,t,n){return e._x_bindings&amp;&amp;e._x_bindings[t]!==void 0?e._x_bindings[t]:Ao(e,t,n)}function kc(e,t,n,r=!0){if(e._x_bindings&amp;&amp;e._x_bindings[t]!==void 0)return e._x_bindings[t];if(e._x_inlineBindings&amp;&amp;e._x_inlineBindings[t]!==void 0){let i=e._x_inlineBindings[t];return i.extract=r,Zi(()=&gt;et(e,i.expression))}return Ao(e,t,n)}function Ao(e,t,n){let r=e.getAttribute(t);return r===null?typeof n==&quot;function&quot;?n():n:r===&quot;&quot;?!0:Oo(t)?!![t,&quot;true&quot;].includes(r):r}function So(e,t){var n;return function(){var r=this,i=arguments,o=function(){n=null,e.apply(r,i)};clearTimeout(n),n=setTimeout(o,t)}}function To(e,t){let n;return function(){let r=this,i=arguments;n||(e.apply(r,i),n=!0,setTimeout(()=&gt;n=!1,t))}}function Mo({get:e,set:t},{get:n,set:r}){let i=!0,o,a=ot(()=&gt;{let s=e(),c=n();if(i)r(Rn(s)),i=!1;else{let f=JSON.stringify(s),l=JSON.stringify(c);f!==o?r(Rn(s)):f!==l&amp;&amp;t(Rn(c))}o=JSON.stringify(e()),JSON.stringify(n())});return()=&gt;{mt(a)}}function Rn(e){return typeof e==&quot;object&quot;?JSON.parse(JSON.stringify(e)):e}function Bc(e){(Array.isArray(e)?e:[e]).forEach(n=&gt;n(Wt))}var Ye={},ri=!1;function $c(e,t){if(ri||(Ye=yt(Ye),ri=!0),t===void 0)return Ye[e];Ye[e]=t,typeof t==&quot;object&quot;&amp;&amp;t!==null&amp;&amp;t.hasOwnProperty(&quot;init&quot;)&amp;&amp;typeof t.init==&quot;function&quot;&amp;&amp;Ye[e].init(),Xi(Ye[e])}function jc(){return Ye}var Co={};function Hc(e,t){let n=typeof t!=&quot;function&quot;?()=&gt;t:t;return e instanceof Element?Ro(e,n()):(Co[e]=n,()=&gt;{})}function Fc(e){return Object.entries(Co).forEach(([t,n])=&gt;{Object.defineProperty(e,t,{get(){return(...r)=&gt;n(...r)}})}),e}function Ro(e,t,n){let r=[];for(;r.length;)r.pop()();let i=Object.entries(t).map(([a,s])=&gt;({name:a,value:s})),o=to(i);return i=i.map(a=&gt;o.find(s=&gt;s.name===a.name)?{name:`x-bind:${a.name}`,value:`&quot;${a.value}&quot;`}:a),_r(e,i,n).map(a=&gt;{r.push(a.runCleanups),a()}),()=&gt;{for(;r.length;)r.pop()()}}var Io={};function Uc(e,t){Io[e]=t}function Wc(e,t){return Object.entries(Io).forEach(([n,r])=&gt;{Object.defineProperty(e,n,{get(){return(...i)=&gt;r.bind(t)(...i)},enumerable:!1})}),e}var Kc={get reactive(){return yt},get release(){return mt},get effect(){return ot},get raw(){return ji},version:&quot;3.13.10&quot;,flushAndStopDeferringMutations:Xs,dontAutoEvaluateFunctions:Zi,disableEffectScheduling:Us,startObservingMutations:pr,stopObservingMutations:qi,setReactivityEngine:Ws,onAttributeRemoved:zi,onAttributesAdded:Ki,closestDataStack:vt,skipDuringClone:Ke,onlyDuringClone:Ec,addRootSelector:ho,addInitSelector:go,interceptClone:gn,addScopeToNode:Ht,deferMutations:Gs,mapAttributes:br,evaluateLater:ae,interceptInit:dc,setEvaluator:ec,mergeProxies:Ft,extractProp:kc,findClosest:Ut,onElRemoved:lr,closestRoot:pn,destroyTree:_o,interceptor:Yi,transition:Yn,setStyles:hn,mutateDom:ee,directive:Q,entangle:Mo,throttle:To,debounce:So,evaluate:et,initTree:Ne,nextTick:xr,prefixed:xt,prefix:ic,plugin:Bc,magic:we,store:$c,start:lc,clone:Oc,cloneNode:wc,bound:Pc,$data:Gi,watch:Hi,walk:He,data:Uc,bind:Hc},Wt=Kc;function zc(e,t){const n=Object.create(null),r=e.split(&quot;,&quot;);for(let i=0;i&lt;r.length;i++)n[r[i]]=!0;return i=&gt;!!n[i]}var Vc=Object.freeze({}),qc=Object.prototype.hasOwnProperty,vn=(e,t)=&gt;qc.call(e,t),tt=Array.isArray,It=e=&gt;Do(e)===&quot;[object Map]&quot;,Gc=e=&gt;typeof e==&quot;string&quot;,wr=e=&gt;typeof e==&quot;symbol&quot;,_n=e=&gt;e!==null&amp;&amp;typeof e==&quot;object&quot;,Xc=Object.prototype.toString,Do=e=&gt;Xc.call(e),No=e=&gt;Do(e).slice(8,-1),Or=e=&gt;Gc(e)&amp;&amp;e!==&quot;NaN&quot;&amp;&amp;e[0]!==&quot;-&quot;&amp;&amp;&quot;&quot;+parseInt(e,10)===e,Yc=e=&gt;{const t=Object.create(null);return n=&gt;t[n]||(t[n]=e(n))},Jc=Yc(e=&gt;e.charAt(0).toUpperCase()+e.slice(1)),Lo=(e,t)=&gt;e!==t&amp;&amp;(e===e||t===t),Zn=new WeakMap,At=[],Ae,nt=Symbol(&quot;iterate&quot;),Qn=Symbol(&quot;Map key iterate&quot;);function Zc(e){return e&amp;&amp;e._isEffect===!0}function Qc(e,t=Vc){Zc(e)&amp;&amp;(e=e.raw);const n=nu(e,t);return t.lazy||n(),n}function eu(e){e.active&amp;&amp;(Po(e),e.options.onStop&amp;&amp;e.options.onStop(),e.active=!1)}var tu=0;function nu(e,t){const n=function(){if(!n.active)return e();if(!At.includes(n)){Po(n);try{return iu(),At.push(n),Ae=n,e()}finally{At.pop(),ko(),Ae=At[At.length-1]}}};return n.id=tu++,n.allowRecurse=!!t.allowRecurse,n._isEffect=!0,n.active=!0,n.raw=e,n.deps=[],n.options=t,n}function Po(e){const{deps:t}=e;if(t.length){for(let n=0;n&lt;t.length;n++)t[n].delete(e);t.length=0}}var _t=!0,Ar=[];function ru(){Ar.push(_t),_t=!1}function iu(){Ar.push(_t),_t=!0}function ko(){const e=Ar.pop();_t=e===void 0?!0:e}function Ee(e,t,n){if(!_t||Ae===void 0)return;let r=Zn.get(e);r||Zn.set(e,r=new Map);let i=r.get(n);i||r.set(n,i=new Set),i.has(Ae)||(i.add(Ae),Ae.deps.push(i),Ae.options.onTrack&amp;&amp;Ae.options.onTrack({effect:Ae,target:e,type:t,key:n}))}function Ue(e,t,n,r,i,o){const a=Zn.get(e);if(!a)return;const s=new Set,c=l=&gt;{l&amp;&amp;l.forEach(v=&gt;{(v!==Ae||v.allowRecurse)&amp;&amp;s.add(v)})};if(t===&quot;clear&quot;)a.forEach(c);else if(n===&quot;length&quot;&amp;&amp;tt(e))a.forEach((l,v)=&gt;{(v===&quot;length&quot;||v&gt;=r)&amp;&amp;c(l)});else switch(n!==void 0&amp;&amp;c(a.get(n)),t){case&quot;add&quot;:tt(e)?Or(n)&amp;&amp;c(a.get(&quot;length&quot;)):(c(a.get(nt)),It(e)&amp;&amp;c(a.get(Qn)));break;case&quot;delete&quot;:tt(e)||(c(a.get(nt)),It(e)&amp;&amp;c(a.get(Qn)));break;case&quot;set&quot;:It(e)&amp;&amp;c(a.get(nt));break}const f=l=&gt;{l.options.onTrigger&amp;&amp;l.options.onTrigger({effect:l,target:e,key:n,type:t,newValue:r,oldValue:i,oldTarget:o}),l.options.scheduler?l.options.scheduler(l):l()};s.forEach(f)}var ou=zc(&quot;__proto__,__v_isRef,__isVue&quot;),Bo=new Set(Object.getOwnPropertyNames(Symbol).map(e=&gt;Symbol[e]).filter(wr)),au=$o(),su=$o(!0),ii=cu();function cu(){const e={};return[&quot;includes&quot;,&quot;indexOf&quot;,&quot;lastIndexOf&quot;].forEach(t=&gt;{e[t]=function(...n){const r=X(this);for(let o=0,a=this.length;o&lt;a;o++)Ee(r,&quot;get&quot;,o+&quot;&quot;);const i=r[t](...n);return i===-1||i===!1?r[t](...n.map(X)):i}}),[&quot;push&quot;,&quot;pop&quot;,&quot;shift&quot;,&quot;unshift&quot;,&quot;splice&quot;].forEach(t=&gt;{e[t]=function(...n){ru();const r=X(this)[t].apply(this,n);return ko(),r}}),e}function $o(e=!1,t=!1){return function(r,i,o){if(i===&quot;__v_isReactive&quot;)return!e;if(i===&quot;__v_isReadonly&quot;)return e;if(i===&quot;__v_raw&quot;&amp;&amp;o===(e?t?Eu:Uo:t?xu:Fo).get(r))return r;const a=tt(r);if(!e&amp;&amp;a&amp;&amp;vn(ii,i))return Reflect.get(ii,i,o);const s=Reflect.get(r,i,o);return(wr(i)?Bo.has(i):ou(i))||(e||Ee(r,&quot;get&quot;,i),t)?s:er(s)?!a||!Or(i)?s.value:s:_n(s)?e?Wo(s):Cr(s):s}}var uu=lu();function lu(e=!1){return function(n,r,i,o){let a=n[r];if(!e&amp;&amp;(i=X(i),a=X(a),!tt(n)&amp;&amp;er(a)&amp;&amp;!er(i)))return a.value=i,!0;const s=tt(n)&amp;&amp;Or(r)?Number(r)&lt;n.length:vn(n,r),c=Reflect.set(n,r,i,o);return n===X(o)&amp;&amp;(s?Lo(i,a)&amp;&amp;Ue(n,&quot;set&quot;,r,i,a):Ue(n,&quot;add&quot;,r,i)),c}}function fu(e,t){const n=vn(e,t),r=e[t],i=Reflect.deleteProperty(e,t);return i&amp;&amp;n&amp;&amp;Ue(e,&quot;delete&quot;,t,void 0,r),i}function du(e,t){const n=Reflect.has(e,t);return(!wr(t)||!Bo.has(t))&amp;&amp;Ee(e,&quot;has&quot;,t),n}function pu(e){return Ee(e,&quot;iterate&quot;,tt(e)?&quot;length&quot;:nt),Reflect.ownKeys(e)}var hu={get:au,set:uu,deleteProperty:fu,has:du,ownKeys:pu},gu={get:su,set(e,t){return console.warn(`Set operation on key &quot;${String(t)}&quot; failed: target is readonly.`,e),!0},deleteProperty(e,t){return console.warn(`Delete operation on key &quot;${String(t)}&quot; failed: target is readonly.`,e),!0}},Sr=e=&gt;_n(e)?Cr(e):e,Tr=e=&gt;_n(e)?Wo(e):e,Mr=e=&gt;e,bn=e=&gt;Reflect.getPrototypeOf(e);function Gt(e,t,n=!1,r=!1){e=e.__v_raw;const i=X(e),o=X(t);t!==o&amp;&amp;!n&amp;&amp;Ee(i,&quot;get&quot;,t),!n&amp;&amp;Ee(i,&quot;get&quot;,o);const{has:a}=bn(i),s=r?Mr:n?Tr:Sr;if(a.call(i,t))return s(e.get(t));if(a.call(i,o))return s(e.get(o));e!==i&amp;&amp;e.get(t)}function Xt(e,t=!1){const n=this.__v_raw,r=X(n),i=X(e);return e!==i&amp;&amp;!t&amp;&amp;Ee(r,&quot;has&quot;,e),!t&amp;&amp;Ee(r,&quot;has&quot;,i),e===i?n.has(e):n.has(e)||n.has(i)}function Yt(e,t=!1){return e=e.__v_raw,!t&amp;&amp;Ee(X(e),&quot;iterate&quot;,nt),Reflect.get(e,&quot;size&quot;,e)}function oi(e){e=X(e);const t=X(this);return bn(t).has.call(t,e)||(t.add(e),Ue(t,&quot;add&quot;,e,e)),this}function ai(e,t){t=X(t);const n=X(this),{has:r,get:i}=bn(n);let o=r.call(n,e);o?Ho(n,r,e):(e=X(e),o=r.call(n,e));const a=i.call(n,e);return n.set(e,t),o?Lo(t,a)&amp;&amp;Ue(n,&quot;set&quot;,e,t,a):Ue(n,&quot;add&quot;,e,t),this}function si(e){const t=X(this),{has:n,get:r}=bn(t);let i=n.call(t,e);i?Ho(t,n,e):(e=X(e),i=n.call(t,e));const o=r?r.call(t,e):void 0,a=t.delete(e);return i&amp;&amp;Ue(t,&quot;delete&quot;,e,void 0,o),a}function ci(){const e=X(this),t=e.size!==0,n=It(e)?new Map(e):new Set(e),r=e.clear();return t&amp;&amp;Ue(e,&quot;clear&quot;,void 0,void 0,n),r}function Jt(e,t){return function(r,i){const o=this,a=o.__v_raw,s=X(a),c=t?Mr:e?Tr:Sr;return!e&amp;&amp;Ee(s,&quot;iterate&quot;,nt),a.forEach((f,l)=&gt;r.call(i,c(f),c(l),o))}}function Zt(e,t,n){return function(...r){const i=this.__v_raw,o=X(i),a=It(o),s=e===&quot;entries&quot;||e===Symbol.iterator&amp;&amp;a,c=e===&quot;keys&quot;&amp;&amp;a,f=i[e](...r),l=n?Mr:t?Tr:Sr;return!t&amp;&amp;Ee(o,&quot;iterate&quot;,c?Qn:nt),{next(){const{value:v,done:b}=f.next();return b?{value:v,done:b}:{value:s?[l(v[0]),l(v[1])]:l(v),done:b}},[Symbol.iterator](){return this}}}}function $e(e){return function(...t){{const n=t[0]?`on key &quot;${t[0]}&quot; `:&quot;&quot;;console.warn(`${Jc(e)} operation ${n}failed: target is readonly.`,X(this))}return e===&quot;delete&quot;?!1:this}}function vu(){const e={get(o){return Gt(this,o)},get size(){return Yt(this)},has:Xt,add:oi,set:ai,delete:si,clear:ci,forEach:Jt(!1,!1)},t={get(o){return Gt(this,o,!1,!0)},get size(){return Yt(this)},has:Xt,add:oi,set:ai,delete:si,clear:ci,forEach:Jt(!1,!0)},n={get(o){return Gt(this,o,!0)},get size(){return Yt(this,!0)},has(o){return Xt.call(this,o,!0)},add:$e(&quot;add&quot;),set:$e(&quot;set&quot;),delete:$e(&quot;delete&quot;),clear:$e(&quot;clear&quot;),forEach:Jt(!0,!1)},r={get(o){return Gt(this,o,!0,!0)},get size(){return Yt(this,!0)},has(o){return Xt.call(this,o,!0)},add:$e(&quot;add&quot;),set:$e(&quot;set&quot;),delete:$e(&quot;delete&quot;),clear:$e(&quot;clear&quot;),forEach:Jt(!0,!0)};return[&quot;keys&quot;,&quot;values&quot;,&quot;entries&quot;,Symbol.iterator].forEach(o=&gt;{e[o]=Zt(o,!1,!1),n[o]=Zt(o,!0,!1),t[o]=Zt(o,!1,!0),r[o]=Zt(o,!0,!0)}),[e,n,t,r]}var[_u,bu,jl,Hl]=vu();function jo(e,t){const n=e?bu:_u;return(r,i,o)=&gt;i===&quot;__v_isReactive&quot;?!e:i===&quot;__v_isReadonly&quot;?e:i===&quot;__v_raw&quot;?r:Reflect.get(vn(n,i)&amp;&amp;i in r?n:r,i,o)}var yu={get:jo(!1)},mu={get:jo(!0)};function Ho(e,t,n){const r=X(n);if(r!==n&amp;&amp;t.call(e,r)){const i=No(e);console.warn(`Reactive ${i} contains both the raw and reactive versions of the same object${i===&quot;Map&quot;?&quot; as keys&quot;:&quot;&quot;}, which can lead to inconsistencies. Avoid differentiating between the raw and reactive versions of an object and only use the reactive version if possible.`)}}var Fo=new WeakMap,xu=new WeakMap,Uo=new WeakMap,Eu=new WeakMap;function wu(e){switch(e){case&quot;Object&quot;:case&quot;Array&quot;:return 1;case&quot;Map&quot;:case&quot;Set&quot;:case&quot;WeakMap&quot;:case&quot;WeakSet&quot;:return 2;default:return 0}}function Ou(e){return e.__v_skip||!Object.isExtensible(e)?0:wu(No(e))}function Cr(e){return e&amp;&amp;e.__v_isReadonly?e:Ko(e,!1,hu,yu,Fo)}function Wo(e){return Ko(e,!0,gu,mu,Uo)}function Ko(e,t,n,r,i){if(!_n(e))return console.warn(`value cannot be made reactive: ${String(e)}`),e;if(e.__v_raw&amp;&amp;!(t&amp;&amp;e.__v_isReactive))return e;const o=i.get(e);if(o)return o;const a=Ou(e);if(a===0)return e;const s=new Proxy(e,a===2?r:n);return i.set(e,s),s}function X(e){return e&amp;&amp;X(e.__v_raw)||e}function er(e){return!!(e&amp;&amp;e.__v_isRef===!0)}we(&quot;nextTick&quot;,()=&gt;xr);we(&quot;dispatch&quot;,e=&gt;Rt.bind(Rt,e));we(&quot;watch&quot;,(e,{evaluateLater:t,cleanup:n})=&gt;(r,i)=&gt;{let o=t(r),s=Hi(()=&gt;{let c;return o(f=&gt;c=f),c},i);n(s)});we(&quot;store&quot;,jc);we(&quot;data&quot;,e=&gt;Gi(e));we(&quot;root&quot;,e=&gt;pn(e));we(&quot;refs&quot;,e=&gt;(e._x_refs_proxy||(e._x_refs_proxy=Ft(Au(e))),e._x_refs_proxy));function Au(e){let t=[];return Ut(e,n=&gt;{n._x_refs&amp;&amp;t.push(n._x_refs)}),t}var In={};function zo(e){return In[e]||(In[e]=0),++In[e]}function Su(e,t){return Ut(e,n=&gt;{if(n._x_ids&amp;&amp;n._x_ids[t])return!0})}function Tu(e,t){e._x_ids||(e._x_ids={}),e._x_ids[t]||(e._x_ids[t]=zo(t))}we(&quot;id&quot;,(e,{cleanup:t})=&gt;(n,r=null)=&gt;{let i=`${n}${r?`-${r}`:&quot;&quot;}`;return Mu(e,i,t,()=&gt;{let o=Su(e,n),a=o?o._x_ids[n]:zo(n);return r?`${n}-${a}-${r}`:`${n}-${a}`})});gn((e,t)=&gt;{e._x_id&amp;&amp;(t._x_id=e._x_id)});function Mu(e,t,n,r){if(e._x_id||(e._x_id={}),e._x_id[t])return e._x_id[t];let i=r();return e._x_id[t]=i,n(()=&gt;{delete e._x_id[t]}),i}we(&quot;el&quot;,e=&gt;e);Vo(&quot;Focus&quot;,&quot;focus&quot;,&quot;focus&quot;);Vo(&quot;Persist&quot;,&quot;persist&quot;,&quot;persist&quot;);function Vo(e,t,n){we(t,r=&gt;ve(`You can&#039;t use [$${t}] without first installing the &quot;${e}&quot; plugin here: https://alpinejs.dev/plugins/${n}`,r))}Q(&quot;modelable&quot;,(e,{expression:t},{effect:n,evaluateLater:r,cleanup:i})=&gt;{let o=r(t),a=()=&gt;{let l;return o(v=&gt;l=v),l},s=r(`${t} = __placeholder`),c=l=&gt;s(()=&gt;{},{scope:{__placeholder:l}}),f=a();c(f),queueMicrotask(()=&gt;{if(!e._x_model)return;e._x_removeModelListeners.default();let l=e._x_model.get,v=e._x_model.set,b=Mo({get(){return l()},set(_){v(_)}},{get(){return a()},set(_){c(_)}});i(b)})});Q(&quot;teleport&quot;,(e,{modifiers:t,expression:n},{cleanup:r})=&gt;{e.tagName.toLowerCase()!==&quot;template&quot;&amp;&amp;ve(&quot;x-teleport can only be used on a &lt;template&gt; tag&quot;,e);let i=ui(n),o=e.content.cloneNode(!0).firstElementChild;e._x_teleport=o,o._x_teleportBack=e,e.setAttribute(&quot;data-teleport-template&quot;,!0),o.setAttribute(&quot;data-teleport-target&quot;,!0),e._x_forwardEvents&amp;&amp;e._x_forwardEvents.forEach(s=&gt;{o.addEventListener(s,c=&gt;{c.stopPropagation(),e.dispatchEvent(new c.constructor(c.type,c))})}),Ht(o,{},e);let a=(s,c,f)=&gt;{f.includes(&quot;prepend&quot;)?c.parentNode.insertBefore(s,c):f.includes(&quot;append&quot;)?c.parentNode.insertBefore(s,c.nextSibling):c.appendChild(s)};ee(()=&gt;{a(o,i,t),Ke(()=&gt;{Ne(o),o._x_ignore=!0})()}),e._x_teleportPutBack=()=&gt;{let s=ui(n);ee(()=&gt;{a(e._x_teleport,s,t)})},r(()=&gt;o.remove())});var Cu=document.createElement(&quot;div&quot;);function ui(e){let t=Ke(()=&gt;document.querySelector(e),()=&gt;Cu)();return t||ve(`Cannot find x-teleport element for selector: &quot;${e}&quot;`),t}var qo=()=&gt;{};qo.inline=(e,{modifiers:t},{cleanup:n})=&gt;{t.includes(&quot;self&quot;)?e._x_ignoreSelf=!0:e._x_ignore=!0,n(()=&gt;{t.includes(&quot;self&quot;)?delete e._x_ignoreSelf:delete e._x_ignore})};Q(&quot;ignore&quot;,qo);Q(&quot;effect&quot;,Ke((e,{expression:t},{effect:n})=&gt;{n(ae(e,t))}));function tr(e,t,n,r){let i=e,o=c=&gt;r(c),a={},s=(c,f)=&gt;l=&gt;f(c,l);if(n.includes(&quot;dot&quot;)&amp;&amp;(t=Ru(t)),n.includes(&quot;camel&quot;)&amp;&amp;(t=Iu(t)),n.includes(&quot;passive&quot;)&amp;&amp;(a.passive=!0),n.includes(&quot;capture&quot;)&amp;&amp;(a.capture=!0),n.includes(&quot;window&quot;)&amp;&amp;(i=window),n.includes(&quot;document&quot;)&amp;&amp;(i=document),n.includes(&quot;debounce&quot;)){let c=n[n.indexOf(&quot;debounce&quot;)+1]||&quot;invalid-wait&quot;,f=un(c.split(&quot;ms&quot;)[0])?Number(c.split(&quot;ms&quot;)[0]):250;o=So(o,f)}if(n.includes(&quot;throttle&quot;)){let c=n[n.indexOf(&quot;throttle&quot;)+1]||&quot;invalid-wait&quot;,f=un(c.split(&quot;ms&quot;)[0])?Number(c.split(&quot;ms&quot;)[0]):250;o=To(o,f)}return n.includes(&quot;prevent&quot;)&amp;&amp;(o=s(o,(c,f)=&gt;{f.preventDefault(),c(f)})),n.includes(&quot;stop&quot;)&amp;&amp;(o=s(o,(c,f)=&gt;{f.stopPropagation(),c(f)})),n.includes(&quot;once&quot;)&amp;&amp;(o=s(o,(c,f)=&gt;{c(f),i.removeEventListener(t,o,a)})),(n.includes(&quot;away&quot;)||n.includes(&quot;outside&quot;))&amp;&amp;(i=document,o=s(o,(c,f)=&gt;{e.contains(f.target)||f.target.isConnected!==!1&amp;&amp;(e.offsetWidth&lt;1&amp;&amp;e.offsetHeight&lt;1||e._x_isShown!==!1&amp;&amp;c(f))})),n.includes(&quot;self&quot;)&amp;&amp;(o=s(o,(c,f)=&gt;{f.target===e&amp;&amp;c(f)})),o=s(o,(c,f)=&gt;{Nu(t)&amp;&amp;Lu(f,n)||c(f)}),i.addEventListener(t,o,a),()=&gt;{i.removeEventListener(t,o,a)}}function Ru(e){return e.replace(/-/g,&quot;.&quot;)}function Iu(e){return e.toLowerCase().replace(/-(\w)/g,(t,n)=&gt;n.toUpperCase())}function un(e){return!Array.isArray(e)&amp;&amp;!isNaN(e)}function Du(e){return[&quot; &quot;,&quot;_&quot;].includes(e)?e:e.replace(/([a-z])([A-Z])/g,&quot;$1-$2&quot;).replace(/[_\s]/,&quot;-&quot;).toLowerCase()}function Nu(e){return[&quot;keydown&quot;,&quot;keyup&quot;].includes(e)}function Lu(e,t){let n=t.filter(o=&gt;![&quot;window&quot;,&quot;document&quot;,&quot;prevent&quot;,&quot;stop&quot;,&quot;once&quot;,&quot;capture&quot;].includes(o));if(n.includes(&quot;debounce&quot;)){let o=n.indexOf(&quot;debounce&quot;);n.splice(o,un((n[o+1]||&quot;invalid-wait&quot;).split(&quot;ms&quot;)[0])?2:1)}if(n.includes(&quot;throttle&quot;)){let o=n.indexOf(&quot;throttle&quot;);n.splice(o,un((n[o+1]||&quot;invalid-wait&quot;).split(&quot;ms&quot;)[0])?2:1)}if(n.length===0||n.length===1&amp;&amp;li(e.key).includes(n[0]))return!1;const i=[&quot;ctrl&quot;,&quot;shift&quot;,&quot;alt&quot;,&quot;meta&quot;,&quot;cmd&quot;,&quot;super&quot;].filter(o=&gt;n.includes(o));return n=n.filter(o=&gt;!i.includes(o)),!(i.length&gt;0&amp;&amp;i.filter(a=&gt;((a===&quot;cmd&quot;||a===&quot;super&quot;)&amp;&amp;(a=&quot;meta&quot;),e[`${a}Key`])).length===i.length&amp;&amp;li(e.key).includes(n[0]))}function li(e){if(!e)return[];e=Du(e);let t={ctrl:&quot;control&quot;,slash:&quot;/&quot;,space:&quot; &quot;,spacebar:&quot; &quot;,cmd:&quot;meta&quot;,esc:&quot;escape&quot;,up:&quot;arrow-up&quot;,down:&quot;arrow-down&quot;,left:&quot;arrow-left&quot;,right:&quot;arrow-right&quot;,period:&quot;.&quot;,comma:&quot;,&quot;,equal:&quot;=&quot;,minus:&quot;-&quot;,underscore:&quot;_&quot;};return t[e]=e,Object.keys(t).map(n=&gt;{if(t[n]===e)return n}).filter(n=&gt;n)}Q(&quot;model&quot;,(e,{modifiers:t,expression:n},{effect:r,cleanup:i})=&gt;{let o=e;t.includes(&quot;parent&quot;)&amp;&amp;(o=e.parentNode);let a=ae(o,n),s;typeof n==&quot;string&quot;?s=ae(o,`${n} = __placeholder`):typeof n==&quot;function&quot;&amp;&amp;typeof n()==&quot;string&quot;?s=ae(o,`${n()} = __placeholder`):s=()=&gt;{};let c=()=&gt;{let b;return a(_=&gt;b=_),fi(b)?b.get():b},f=b=&gt;{let _;a(A=&gt;_=A),fi(_)?_.set(b):s(()=&gt;{},{scope:{__placeholder:b}})};typeof n==&quot;string&quot;&amp;&amp;e.type===&quot;radio&quot;&amp;&amp;ee(()=&gt;{e.hasAttribute(&quot;name&quot;)||e.setAttribute(&quot;name&quot;,n)});var l=e.tagName.toLowerCase()===&quot;select&quot;||[&quot;checkbox&quot;,&quot;radio&quot;].includes(e.type)||t.includes(&quot;lazy&quot;)?&quot;change&quot;:&quot;input&quot;;let v=Fe?()=&gt;{}:tr(e,l,t,b=&gt;{f(Dn(e,t,b,c()))});if(t.includes(&quot;fill&quot;)&amp;&amp;([void 0,null,&quot;&quot;].includes(c())||e.type===&quot;checkbox&quot;&amp;&amp;Array.isArray(c())||e.tagName.toLowerCase()===&quot;select&quot;&amp;&amp;e.multiple)&amp;&amp;f(Dn(e,t,{target:e},c())),e._x_removeModelListeners||(e._x_removeModelListeners={}),e._x_removeModelListeners.default=v,i(()=&gt;e._x_removeModelListeners.default()),e.form){let b=tr(e.form,&quot;reset&quot;,[],_=&gt;{xr(()=&gt;e._x_model&amp;&amp;e._x_model.set(Dn(e,t,{target:e},c())))});i(()=&gt;b())}e._x_model={get(){return c()},set(b){f(b)}},e._x_forceModelUpdate=b=&gt;{b===void 0&amp;&amp;typeof n==&quot;string&quot;&amp;&amp;n.match(/\./)&amp;&amp;(b=&quot;&quot;),window.fromModel=!0,ee(()=&gt;Eo(e,&quot;value&quot;,b)),delete window.fromModel},r(()=&gt;{let b=c();t.includes(&quot;unintrusive&quot;)&amp;&amp;document.activeElement.isSameNode(e)||e._x_forceModelUpdate(b)})});function Dn(e,t,n,r){return ee(()=&gt;{if(n instanceof CustomEvent&amp;&amp;n.detail!==void 0)return n.detail!==null&amp;&amp;n.detail!==void 0?n.detail:n.target.value;if(e.type===&quot;checkbox&quot;)if(Array.isArray(r)){let i=null;return t.includes(&quot;number&quot;)?i=Nn(n.target.value):t.includes(&quot;boolean&quot;)?i=nn(n.target.value):i=n.target.value,n.target.checked?r.includes(i)?r:r.concat([i]):r.filter(o=&gt;!Pu(o,i))}else return n.target.checked;else{if(e.tagName.toLowerCase()===&quot;select&quot;&amp;&amp;e.multiple)return t.includes(&quot;number&quot;)?Array.from(n.target.selectedOptions).map(i=&gt;{let o=i.value||i.text;return Nn(o)}):t.includes(&quot;boolean&quot;)?Array.from(n.target.selectedOptions).map(i=&gt;{let o=i.value||i.text;return nn(o)}):Array.from(n.target.selectedOptions).map(i=&gt;i.value||i.text);{let i;return e.type===&quot;radio&quot;?n.target.checked?i=n.target.value:i=r:i=n.target.value,t.includes(&quot;number&quot;)?Nn(i):t.includes(&quot;boolean&quot;)?nn(i):t.includes(&quot;trim&quot;)?i.trim():i}}})}function Nn(e){let t=e?parseFloat(e):null;return ku(t)?t:e}function Pu(e,t){return e==t}function ku(e){return!Array.isArray(e)&amp;&amp;!isNaN(e)}function fi(e){return e!==null&amp;&amp;typeof e==&quot;object&quot;&amp;&amp;typeof e.get==&quot;function&quot;&amp;&amp;typeof e.set==&quot;function&quot;}Q(&quot;cloak&quot;,e=&gt;queueMicrotask(()=&gt;ee(()=&gt;e.removeAttribute(xt(&quot;cloak&quot;)))));go(()=&gt;`[${xt(&quot;init&quot;)}]`);Q(&quot;init&quot;,Ke((e,{expression:t},{evaluate:n})=&gt;typeof t==&quot;string&quot;?!!t.trim()&amp;&amp;n(t,{},!1):n(t,{},!1)));Q(&quot;text&quot;,(e,{expression:t},{effect:n,evaluateLater:r})=&gt;{let i=r(t);n(()=&gt;{i(o=&gt;{ee(()=&gt;{e.textContent=o})})})});Q(&quot;html&quot;,(e,{expression:t},{effect:n,evaluateLater:r})=&gt;{let i=r(t);n(()=&gt;{i(o=&gt;{ee(()=&gt;{e.innerHTML=o,e._x_ignoreSelf=!0,Ne(e),delete e._x_ignoreSelf})})})});br(io(&quot;:&quot;,oo(xt(&quot;bind:&quot;))));var Go=(e,{value:t,modifiers:n,expression:r,original:i},{effect:o,cleanup:a})=&gt;{if(!t){let c={};Fc(c),ae(e,r)(l=&gt;{Ro(e,l,i)},{scope:c});return}if(t===&quot;key&quot;)return Bu(e,r);if(e._x_inlineBindings&amp;&amp;e._x_inlineBindings[t]&amp;&amp;e._x_inlineBindings[t].extract)return;let s=ae(e,r);o(()=&gt;s(c=&gt;{c===void 0&amp;&amp;typeof r==&quot;string&quot;&amp;&amp;r.match(/\./)&amp;&amp;(c=&quot;&quot;),ee(()=&gt;Eo(e,t,c,n))})),a(()=&gt;{e._x_undoAddedClasses&amp;&amp;e._x_undoAddedClasses(),e._x_undoAddedStyles&amp;&amp;e._x_undoAddedStyles()})};Go.inline=(e,{value:t,modifiers:n,expression:r})=&gt;{t&amp;&amp;(e._x_inlineBindings||(e._x_inlineBindings={}),e._x_inlineBindings[t]={expression:r,extract:!1})};Q(&quot;bind&quot;,Go);function Bu(e,t){e._x_keyExpression=t}ho(()=&gt;`[${xt(&quot;data&quot;)}]`);Q(&quot;data&quot;,(e,{expression:t},{cleanup:n})=&gt;{if($u(e))return;t=t===&quot;&quot;?&quot;{}&quot;:t;let r={};Kn(r,e);let i={};Wc(i,r);let o=et(e,t,{scope:i});(o===void 0||o===!0)&amp;&amp;(o={}),Kn(o,e);let a=yt(o);Xi(a);let s=Ht(e,a);a.init&amp;&amp;et(e,a.init),n(()=&gt;{a.destroy&amp;&amp;et(e,a.destroy),s()})});gn((e,t)=&gt;{e._x_dataStack&amp;&amp;(t._x_dataStack=e._x_dataStack,t.setAttribute(&quot;data-has-alpine-state&quot;,!0))});function $u(e){return Fe?Jn?!0:e.hasAttribute(&quot;data-has-alpine-state&quot;):!1}Q(&quot;show&quot;,(e,{modifiers:t,expression:n},{effect:r})=&gt;{let i=ae(e,n);e._x_doHide||(e._x_doHide=()=&gt;{ee(()=&gt;{e.style.setProperty(&quot;display&quot;,&quot;none&quot;,t.includes(&quot;important&quot;)?&quot;important&quot;:void 0)})}),e._x_doShow||(e._x_doShow=()=&gt;{ee(()=&gt;{e.style.length===1&amp;&amp;e.style.display===&quot;none&quot;?e.removeAttribute(&quot;style&quot;):e.style.removeProperty(&quot;display&quot;)})});let o=()=&gt;{e._x_doHide(),e._x_isShown=!1},a=()=&gt;{e._x_doShow(),e._x_isShown=!0},s=()=&gt;setTimeout(a),c=Xn(v=&gt;v?a():o(),v=&gt;{typeof e._x_toggleAndCascadeWithTransitions==&quot;function&quot;?e._x_toggleAndCascadeWithTransitions(e,v,a,o):v?s():o()}),f,l=!0;r(()=&gt;i(v=&gt;{!l&amp;&amp;v===f||(t.includes(&quot;immediate&quot;)&amp;&amp;(v?s():o()),c(v),f=v,l=!1)}))});Q(&quot;for&quot;,(e,{expression:t},{effect:n,cleanup:r})=&gt;{let i=Hu(t),o=ae(e,i.items),a=ae(e,e._x_keyExpression||&quot;index&quot;);e._x_prevKeys=[],e._x_lookup={},n(()=&gt;ju(e,i,o,a)),r(()=&gt;{Object.values(e._x_lookup).forEach(s=&gt;s.remove()),delete e._x_prevKeys,delete e._x_lookup})});function ju(e,t,n,r){let i=a=&gt;typeof a==&quot;object&quot;&amp;&amp;!Array.isArray(a),o=e;n(a=&gt;{Fu(a)&amp;&amp;a&gt;=0&amp;&amp;(a=Array.from(Array(a).keys(),h=&gt;h+1)),a===void 0&amp;&amp;(a=[]);let s=e._x_lookup,c=e._x_prevKeys,f=[],l=[];if(i(a))a=Object.entries(a).map(([h,E])=&gt;{let O=di(t,E,h,a);r(M=&gt;{l.includes(M)&amp;&amp;ve(&quot;Duplicate key on x-for&quot;,e),l.push(M)},{scope:{index:h,...O}}),f.push(O)});else for(let h=0;h&lt;a.length;h++){let E=di(t,a[h],h,a);r(O=&gt;{l.includes(O)&amp;&amp;ve(&quot;Duplicate key on x-for&quot;,e),l.push(O)},{scope:{index:h,...E}}),f.push(E)}let v=[],b=[],_=[],A=[];for(let h=0;h&lt;c.length;h++){let E=c[h];l.indexOf(E)===-1&amp;&amp;_.push(E)}c=c.filter(h=&gt;!_.includes(h));let S=&quot;template&quot;;for(let h=0;h&lt;l.length;h++){let E=l[h],O=c.indexOf(E);if(O===-1)c.splice(h,0,E),v.push([S,h]);else if(O!==h){let M=c.splice(h,1)[0],u=c.splice(O-1,1)[0];c.splice(h,0,u),c.splice(O,0,M),b.push([M,u])}else A.push(E);S=E}for(let h=0;h&lt;_.length;h++){let E=_[h];s[E]._x_effects&amp;&amp;s[E]._x_effects.forEach($i),s[E].remove(),s[E]=null,delete s[E]}for(let h=0;h&lt;b.length;h++){let[E,O]=b[h],M=s[E],u=s[O],I=document.createElement(&quot;div&quot;);ee(()=&gt;{u||ve(&#039;x-for &quot;:key&quot; is undefined or invalid&#039;,o,O,s),u.after(I),M.after(u),u._x_currentIfEl&amp;&amp;u.after(u._x_currentIfEl),I.before(M),M._x_currentIfEl&amp;&amp;M.after(M._x_currentIfEl),I.remove()}),u._x_refreshXForScope(f[l.indexOf(O)])}for(let h=0;h&lt;v.length;h++){let[E,O]=v[h],M=E===&quot;template&quot;?o:s[E];M._x_currentIfEl&amp;&amp;(M=M._x_currentIfEl);let u=f[O],I=l[O],m=document.importNode(o.content,!0).firstElementChild,L=yt(u);Ht(m,L,o),m._x_refreshXForScope=K=&gt;{Object.entries(K).forEach(([P,H])=&gt;{L[P]=H})},ee(()=&gt;{M.after(m),Ke(()=&gt;Ne(m))()}),typeof I==&quot;object&quot;&amp;&amp;ve(&quot;x-for key cannot be an object, it must be a string or an integer&quot;,o),s[I]=m}for(let h=0;h&lt;A.length;h++)s[A[h]]._x_refreshXForScope(f[l.indexOf(A[h])]);o._x_prevKeys=l})}function Hu(e){let t=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,n=/^\s*\(|\)\s*$/g,r=/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,i=e.match(r);if(!i)return;let o={};o.items=i[2].trim();let a=i[1].replace(n,&quot;&quot;).trim(),s=a.match(t);return s?(o.item=a.replace(t,&quot;&quot;).trim(),o.index=s[1].trim(),s[2]&amp;&amp;(o.collection=s[2].trim())):o.item=a,o}function di(e,t,n,r){let i={};return/^\[.*\]$/.test(e.item)&amp;&amp;Array.isArray(t)?e.item.replace(&quot;[&quot;,&quot;&quot;).replace(&quot;]&quot;,&quot;&quot;).split(&quot;,&quot;).map(a=&gt;a.trim()).forEach((a,s)=&gt;{i[a]=t[s]}):/^\{.*\}$/.test(e.item)&amp;&amp;!Array.isArray(t)&amp;&amp;typeof t==&quot;object&quot;?e.item.replace(&quot;{&quot;,&quot;&quot;).replace(&quot;}&quot;,&quot;&quot;).split(&quot;,&quot;).map(a=&gt;a.trim()).forEach(a=&gt;{i[a]=t[a]}):i[e.item]=t,e.index&amp;&amp;(i[e.index]=n),e.collection&amp;&amp;(i[e.collection]=r),i}function Fu(e){return!Array.isArray(e)&amp;&amp;!isNaN(e)}function Xo(){}Xo.inline=(e,{expression:t},{cleanup:n})=&gt;{let r=pn(e);r._x_refs||(r._x_refs={}),r._x_refs[t]=e,n(()=&gt;delete r._x_refs[t])};Q(&quot;ref&quot;,Xo);Q(&quot;if&quot;,(e,{expression:t},{effect:n,cleanup:r})=&gt;{e.tagName.toLowerCase()!==&quot;template&quot;&amp;&amp;ve(&quot;x-if can only be used on a &lt;template&gt; tag&quot;,e);let i=ae(e,t),o=()=&gt;{if(e._x_currentIfEl)return e._x_currentIfEl;let s=e.content.cloneNode(!0).firstElementChild;return Ht(s,{},e),ee(()=&gt;{e.after(s),Ke(()=&gt;Ne(s))()}),e._x_currentIfEl=s,e._x_undoIf=()=&gt;{He(s,c=&gt;{c._x_effects&amp;&amp;c._x_effects.forEach($i)}),s.remove(),delete e._x_currentIfEl},s},a=()=&gt;{e._x_undoIf&amp;&amp;(e._x_undoIf(),delete e._x_undoIf)};n(()=&gt;i(s=&gt;{s?o():a()})),r(()=&gt;e._x_undoIf&amp;&amp;e._x_undoIf())});Q(&quot;id&quot;,(e,{expression:t},{evaluate:n})=&gt;{n(t).forEach(i=&gt;Tu(e,i))});gn((e,t)=&gt;{e._x_ids&amp;&amp;(t._x_ids=e._x_ids)});br(io(&quot;@&quot;,oo(xt(&quot;on:&quot;))));Q(&quot;on&quot;,Ke((e,{value:t,modifiers:n,expression:r},{cleanup:i})=&gt;{let o=r?ae(e,r):()=&gt;{};e.tagName.toLowerCase()===&quot;template&quot;&amp;&amp;(e._x_forwardEvents||(e._x_forwardEvents=[]),e._x_forwardEvents.includes(t)||e._x_forwardEvents.push(t));let a=tr(e,t,n,s=&gt;{o(()=&gt;{},{scope:{$event:s},params:[s]})});i(()=&gt;a())}));yn(&quot;Collapse&quot;,&quot;collapse&quot;,&quot;collapse&quot;);yn(&quot;Intersect&quot;,&quot;intersect&quot;,&quot;intersect&quot;);yn(&quot;Focus&quot;,&quot;trap&quot;,&quot;focus&quot;);yn(&quot;Mask&quot;,&quot;mask&quot;,&quot;mask&quot;);function yn(e,t,n){Q(t,r=&gt;ve(`You can&#039;t use [x-${t}] without first installing the &quot;${e}&quot; plugin here: https://alpinejs.dev/plugins/${n}`,r))}Wt.setEvaluator(eo);Wt.setReactivityEngine({reactive:Cr,effect:Qc,release:eu,raw:X});var Uu=Wt,Wu=Uu;function Ku(e){return e&amp;&amp;e.__esModule&amp;&amp;Object.prototype.hasOwnProperty.call(e,&quot;default&quot;)?e.default:e}function Yo(e){return e instanceof Map?e.clear=e.delete=e.set=function(){throw new Error(&quot;map is read-only&quot;)}:e instanceof Set&amp;&amp;(e.add=e.clear=e.delete=function(){throw new Error(&quot;set is read-only&quot;)}),Object.freeze(e),Object.getOwnPropertyNames(e).forEach(t=&gt;{const n=e[t],r=typeof n;(r===&quot;object&quot;||r===&quot;function&quot;)&amp;&amp;!Object.isFrozen(n)&amp;&amp;Yo(n)}),e}class pi{constructor(t){t.data===void 0&amp;&amp;(t.data={}),this.data=t.data,this.isMatchIgnored=!1}ignoreMatch(){this.isMatchIgnored=!0}}function Jo(e){return e.replace(/&amp;/g,&quot;&amp;amp;&quot;).replace(/&lt;/g,&quot;&amp;lt;&quot;).replace(/&gt;/g,&quot;&amp;gt;&quot;).replace(/&quot;/g,&quot;&amp;quot;&quot;).replace(/&#039;/g,&quot;&amp;#x27;&quot;)}function je(e,...t){const n=Object.create(null);for(const r in e)n[r]=e[r];return t.forEach(function(r){for(const i in r)n[i]=r[i]}),n}const zu=&quot;&lt;/span&gt;&quot;,hi=e=&gt;!!e.scope,Vu=(e,{prefix:t})=&gt;{if(e.startsWith(&quot;language:&quot;))return e.replace(&quot;language:&quot;,&quot;language-&quot;);if(e.includes(&quot;.&quot;)){const n=e.split(&quot;.&quot;);return[`${t}${n.shift()}`,...n.map((r,i)=&gt;`${r}${&quot;_&quot;.repeat(i+1)}`)].join(&quot; &quot;)}return`${t}${e}`};class qu{constructor(t,n){this.buffer=&quot;&quot;,this.classPrefix=n.classPrefix,t.walk(this)}addText(t){this.buffer+=Jo(t)}openNode(t){if(!hi(t))return;const n=Vu(t.scope,{prefix:this.classPrefix});this.span(n)}closeNode(t){hi(t)&amp;&amp;(this.buffer+=zu)}value(){return this.buffer}span(t){this.buffer+=`&lt;span class=&quot;${t}&quot;&gt;`}}const gi=(e={})=&gt;{const t={children:[]};return Object.assign(t,e),t};class Rr{constructor(){this.rootNode=gi(),this.stack=[this.rootNode]}get top(){return this.stack[this.stack.length-1]}get root(){return this.rootNode}add(t){this.top.children.push(t)}openNode(t){const n=gi({scope:t});this.add(n),this.stack.push(n)}closeNode(){if(this.stack.length&gt;1)return this.stack.pop()}closeAllNodes(){for(;this.closeNode(););}toJSON(){return JSON.stringify(this.rootNode,null,4)}walk(t){return this.constructor._walk(t,this.rootNode)}static _walk(t,n){return typeof n==&quot;string&quot;?t.addText(n):n.children&amp;&amp;(t.openNode(n),n.children.forEach(r=&gt;this._walk(t,r)),t.closeNode(n)),t}static _collapse(t){typeof t!=&quot;string&quot;&amp;&amp;t.children&amp;&amp;(t.children.every(n=&gt;typeof n==&quot;string&quot;)?t.children=[t.children.join(&quot;&quot;)]:t.children.forEach(n=&gt;{Rr._collapse(n)}))}}class Gu extends Rr{constructor(t){super(),this.options=t}addText(t){t!==&quot;&quot;&amp;&amp;this.add(t)}startScope(t){this.openNode(t)}endScope(){this.closeNode()}__addSublanguage(t,n){const r=t.root;n&amp;&amp;(r.scope=`language:${n}`),this.add(r)}toHTML(){return new qu(this,this.options).value()}finalize(){return this.closeAllNodes(),!0}}function Pt(e){return e?typeof e==&quot;string&quot;?e:e.source:null}function Zo(e){return at(&quot;(?=&quot;,e,&quot;)&quot;)}function Xu(e){return at(&quot;(?:&quot;,e,&quot;)*&quot;)}function Yu(e){return at(&quot;(?:&quot;,e,&quot;)?&quot;)}function at(...e){return e.map(n=&gt;Pt(n)).join(&quot;&quot;)}function Ju(e){const t=e[e.length-1];return typeof t==&quot;object&quot;&amp;&amp;t.constructor===Object?(e.splice(e.length-1,1),t):{}}function Ir(...e){return&quot;(&quot;+(Ju(e).capture?&quot;&quot;:&quot;?:&quot;)+e.map(r=&gt;Pt(r)).join(&quot;|&quot;)+&quot;)&quot;}function Qo(e){return new RegExp(e.toString()+&quot;|&quot;).exec(&quot;&quot;).length-1}function Zu(e,t){const n=e&amp;&amp;e.exec(t);return n&amp;&amp;n.index===0}const Qu=/\[(?:[^\\\]]|\\.)*\]|\(\??|\\([1-9][0-9]*)|\\./;function Dr(e,{joinWith:t}){let n=0;return e.map(r=&gt;{n+=1;const i=n;let o=Pt(r),a=&quot;&quot;;for(;o.length&gt;0;){const s=Qu.exec(o);if(!s){a+=o;break}a+=o.substring(0,s.index),o=o.substring(s.index+s[0].length),s[0][0]===&quot;\\&quot;&amp;&amp;s[1]?a+=&quot;\\&quot;+String(Number(s[1])+i):(a+=s[0],s[0]===&quot;(&quot;&amp;&amp;n++)}return a}).map(r=&gt;`(${r})`).join(t)}const el=/\b\B/,ea=&quot;[a-zA-Z]\\w*&quot;,Nr=&quot;[a-zA-Z_]\\w*&quot;,ta=&quot;\\b\\d+(\\.\\d+)?&quot;,na=&quot;(-?)(\\b0[xX][a-fA-F0-9]+|(\\b\\d+(\\.\\d*)?|\\.\\d+)([eE][-+]?\\d+)?)&quot;,ra=&quot;\\b(0b[01]+)&quot;,tl=&quot;!|!=|!==|%|%=|&amp;|&amp;&amp;|&amp;=|\\*|\\*=|\\+|\\+=|,|-|-=|/=|/|:|;|&lt;&lt;|&lt;&lt;=|&lt;=|&lt;|===|==|=|&gt;&gt;&gt;=|&gt;&gt;=|&gt;=|&gt;&gt;&gt;|&gt;&gt;|&gt;|\\?|\\[|\\{|\\(|\\^|\\^=|\\||\\|=|\\|\\||~&quot;,nl=(e={})=&gt;{const t=/^#![ ]*\//;return e.binary&amp;&amp;(e.begin=at(t,/.*\b/,e.binary,/\b.*/)),je({scope:&quot;meta&quot;,begin:t,end:/$/,relevance:0,&quot;on:begin&quot;:(n,r)=&gt;{n.index!==0&amp;&amp;r.ignoreMatch()}},e)},kt={begin:&quot;\\\\[\\s\\S]&quot;,relevance:0},rl={scope:&quot;string&quot;,begin:&quot;&#039;&quot;,end:&quot;&#039;&quot;,illegal:&quot;\\n&quot;,contains:[kt]},il={scope:&quot;string&quot;,begin:&#039;&quot;&#039;,end:&#039;&quot;&#039;,illegal:&quot;\\n&quot;,contains:[kt]},ol={begin:/\b(a|an|the|are|I&#039;m|isn&#039;t|don&#039;t|doesn&#039;t|won&#039;t|but|just|should|pretty|simply|enough|gonna|going|wtf|so|such|will|you|your|they|like|more)\b/},mn=function(e,t,n={}){const r=je({scope:&quot;comment&quot;,begin:e,end:t,contains:[]},n);r.contains.push({scope:&quot;doctag&quot;,begin:&quot;[ ]*(?=(TODO|FIXME|NOTE|BUG|OPTIMIZE|HACK|XXX):)&quot;,end:/(TODO|FIXME|NOTE|BUG|OPTIMIZE|HACK|XXX):/,excludeBegin:!0,relevance:0});const i=Ir(&quot;I&quot;,&quot;a&quot;,&quot;is&quot;,&quot;so&quot;,&quot;us&quot;,&quot;to&quot;,&quot;at&quot;,&quot;if&quot;,&quot;in&quot;,&quot;it&quot;,&quot;on&quot;,/[A-Za-z]+[&#039;](d|ve|re|ll|t|s|n)/,/[A-Za-z]+[-][a-z]+/,/[A-Za-z][a-z]{2,}/);return r.contains.push({begin:at(/[ ]+/,&quot;(&quot;,i,/[.]?[:]?([.][ ]|[ ])/,&quot;){3}&quot;)}),r},al=mn(&quot;//&quot;,&quot;$&quot;),sl=mn(&quot;/\\*&quot;,&quot;\\*/&quot;),cl=mn(&quot;#&quot;,&quot;$&quot;),ul={scope:&quot;number&quot;,begin:ta,relevance:0},ll={scope:&quot;number&quot;,begin:na,relevance:0},fl={scope:&quot;number&quot;,begin:ra,relevance:0},dl={scope:&quot;regexp&quot;,begin:/\/(?=[^/\n]*\/)/,end:/\/[gimuy]*/,contains:[kt,{begin:/\[/,end:/\]/,relevance:0,contains:[kt]}]},pl={scope:&quot;title&quot;,begin:ea,relevance:0},hl={scope:&quot;title&quot;,begin:Nr,relevance:0},gl={begin:&quot;\\.\\s*&quot;+Nr,relevance:0},vl=function(e){return Object.assign(e,{&quot;on:begin&quot;:(t,n)=&gt;{n.data._beginMatch=t[1]},&quot;on:end&quot;:(t,n)=&gt;{n.data._beginMatch!==t[1]&amp;&amp;n.ignoreMatch()}})};var Qt=Object.freeze({__proto__:null,APOS_STRING_MODE:rl,BACKSLASH_ESCAPE:kt,BINARY_NUMBER_MODE:fl,BINARY_NUMBER_RE:ra,COMMENT:mn,C_BLOCK_COMMENT_MODE:sl,C_LINE_COMMENT_MODE:al,C_NUMBER_MODE:ll,C_NUMBER_RE:na,END_SAME_AS_BEGIN:vl,HASH_COMMENT_MODE:cl,IDENT_RE:ea,MATCH_NOTHING_RE:el,METHOD_GUARD:gl,NUMBER_MODE:ul,NUMBER_RE:ta,PHRASAL_WORDS_MODE:ol,QUOTE_STRING_MODE:il,REGEXP_MODE:dl,RE_STARTERS_RE:tl,SHEBANG:nl,TITLE_MODE:pl,UNDERSCORE_IDENT_RE:Nr,UNDERSCORE_TITLE_MODE:hl});function _l(e,t){e.input[e.index-1]===&quot;.&quot;&amp;&amp;t.ignoreMatch()}function bl(e,t){e.className!==void 0&amp;&amp;(e.scope=e.className,delete e.className)}function yl(e,t){t&amp;&amp;e.beginKeywords&amp;&amp;(e.begin=&quot;\\b(&quot;+e.beginKeywords.split(&quot; &quot;).join(&quot;|&quot;)+&quot;)(?!\\.)(?=\\b|\\s)&quot;,e.__beforeBegin=_l,e.keywords=e.keywords||e.beginKeywords,delete e.beginKeywords,e.relevance===void 0&amp;&amp;(e.relevance=0))}function ml(e,t){Array.isArray(e.illegal)&amp;&amp;(e.illegal=Ir(...e.illegal))}function xl(e,t){if(e.match){if(e.begin||e.end)throw new Error(&quot;begin &amp; end are not supported with match&quot;);e.begin=e.match,delete e.match}}function El(e,t){e.relevance===void 0&amp;&amp;(e.relevance=1)}const wl=(e,t)=&gt;{if(!e.beforeMatch)return;if(e.starts)throw new Error(&quot;beforeMatch cannot be used with starts&quot;);const n=Object.assign({},e);Object.keys(e).forEach(r=&gt;{delete e[r]}),e.keywords=n.keywords,e.begin=at(n.beforeMatch,Zo(n.begin)),e.starts={relevance:0,contains:[Object.assign(n,{endsParent:!0})]},e.relevance=0,delete n.beforeMatch},Ol=[&quot;of&quot;,&quot;and&quot;,&quot;for&quot;,&quot;in&quot;,&quot;not&quot;,&quot;or&quot;,&quot;if&quot;,&quot;then&quot;,&quot;parent&quot;,&quot;list&quot;,&quot;value&quot;],Al=&quot;keyword&quot;;function ia(e,t,n=Al){const r=Object.create(null);return typeof e==&quot;string&quot;?i(n,e.split(&quot; &quot;)):Array.isArray(e)?i(n,e):Object.keys(e).forEach(function(o){Object.assign(r,ia(e[o],t,o))}),r;function i(o,a){t&amp;&amp;(a=a.map(s=&gt;s.toLowerCase())),a.forEach(function(s){const c=s.split(&quot;|&quot;);r[c[0]]=[o,Sl(c[0],c[1])]})}}function Sl(e,t){return t?Number(t):Tl(e)?0:1}function Tl(e){return Ol.includes(e.toLowerCase())}const vi={},rt=e=&gt;{console.error(e)},_i=(e,...t)=&gt;{console.log(`WARN: ${e}`,...t)},lt=(e,t)=&gt;{vi[`${e}/${t}`]||(console.log(`Deprecated as of ${e}. ${t}`),vi[`${e}/${t}`]=!0)},ln=new Error;function oa(e,t,{key:n}){let r=0;const i=e[n],o={},a={};for(let s=1;s&lt;=t.length;s++)a[s+r]=i[s],o[s+r]=!0,r+=Qo(t[s-1]);e[n]=a,e[n]._emit=o,e[n]._multi=!0}function Ml(e){if(Array.isArray(e.begin)){if(e.skip||e.excludeBegin||e.returnBegin)throw rt(&quot;skip, excludeBegin, returnBegin not compatible with beginScope: {}&quot;),ln;if(typeof e.beginScope!=&quot;object&quot;||e.beginScope===null)throw rt(&quot;beginScope must be object&quot;),ln;oa(e,e.begin,{key:&quot;beginScope&quot;}),e.begin=Dr(e.begin,{joinWith:&quot;&quot;})}}function Cl(e){if(Array.isArray(e.end)){if(e.skip||e.excludeEnd||e.returnEnd)throw rt(&quot;skip, excludeEnd, returnEnd not compatible with endScope: {}&quot;),ln;if(typeof e.endScope!=&quot;object&quot;||e.endScope===null)throw rt(&quot;endScope must be object&quot;),ln;oa(e,e.end,{key:&quot;endScope&quot;}),e.end=Dr(e.end,{joinWith:&quot;&quot;})}}function Rl(e){e.scope&amp;&amp;typeof e.scope==&quot;object&quot;&amp;&amp;e.scope!==null&amp;&amp;(e.beginScope=e.scope,delete e.scope)}function Il(e){Rl(e),typeof e.beginScope==&quot;string&quot;&amp;&amp;(e.beginScope={_wrap:e.beginScope}),typeof e.endScope==&quot;string&quot;&amp;&amp;(e.endScope={_wrap:e.endScope}),Ml(e),Cl(e)}function Dl(e){function t(a,s){return new RegExp(Pt(a),&quot;m&quot;+(e.case_insensitive?&quot;i&quot;:&quot;&quot;)+(e.unicodeRegex?&quot;u&quot;:&quot;&quot;)+(s?&quot;g&quot;:&quot;&quot;))}class n{constructor(){this.matchIndexes={},this.regexes=[],this.matchAt=1,this.position=0}addRule(s,c){c.position=this.position++,this.matchIndexes[this.matchAt]=c,this.regexes.push([c,s]),this.matchAt+=Qo(s)+1}compile(){this.regexes.length===0&amp;&amp;(this.exec=()=&gt;null);const s=this.regexes.map(c=&gt;c[1]);this.matcherRe=t(Dr(s,{joinWith:&quot;|&quot;}),!0),this.lastIndex=0}exec(s){this.matcherRe.lastIndex=this.lastIndex;const c=this.matcherRe.exec(s);if(!c)return null;const f=c.findIndex((v,b)=&gt;b&gt;0&amp;&amp;v!==void 0),l=this.matchIndexes[f];return c.splice(0,f),Object.assign(c,l)}}class r{constructor(){this.rules=[],this.multiRegexes=[],this.count=0,this.lastIndex=0,this.regexIndex=0}getMatcher(s){if(this.multiRegexes[s])return this.multiRegexes[s];const c=new n;return this.rules.slice(s).forEach(([f,l])=&gt;c.addRule(f,l)),c.compile(),this.multiRegexes[s]=c,c}resumingScanAtSamePosition(){return this.regexIndex!==0}considerAll(){this.regexIndex=0}addRule(s,c){this.rules.push([s,c]),c.type===&quot;begin&quot;&amp;&amp;this.count++}exec(s){const c=this.getMatcher(this.regexIndex);c.lastIndex=this.lastIndex;let f=c.exec(s);if(this.resumingScanAtSamePosition()&amp;&amp;!(f&amp;&amp;f.index===this.lastIndex)){const l=this.getMatcher(0);l.lastIndex=this.lastIndex+1,f=l.exec(s)}return f&amp;&amp;(this.regexIndex+=f.position+1,this.regexIndex===this.count&amp;&amp;this.considerAll()),f}}function i(a){const s=new r;return a.contains.forEach(c=&gt;s.addRule(c.begin,{rule:c,type:&quot;begin&quot;})),a.terminatorEnd&amp;&amp;s.addRule(a.terminatorEnd,{type:&quot;end&quot;}),a.illegal&amp;&amp;s.addRule(a.illegal,{type:&quot;illegal&quot;}),s}function o(a,s){const c=a;if(a.isCompiled)return c;[bl,xl,Il,wl].forEach(l=&gt;l(a,s)),e.compilerExtensions.forEach(l=&gt;l(a,s)),a.__beforeBegin=null,[yl,ml,El].forEach(l=&gt;l(a,s)),a.isCompiled=!0;let f=null;return typeof a.keywords==&quot;object&quot;&amp;&amp;a.keywords.$pattern&amp;&amp;(a.keywords=Object.assign({},a.keywords),f=a.keywords.$pattern,delete a.keywords.$pattern),f=f||/\w+/,a.keywords&amp;&amp;(a.keywords=ia(a.keywords,e.case_insensitive)),c.keywordPatternRe=t(f,!0),s&amp;&amp;(a.begin||(a.begin=/\B|\b/),c.beginRe=t(c.begin),!a.end&amp;&amp;!a.endsWithParent&amp;&amp;(a.end=/\B|\b/),a.end&amp;&amp;(c.endRe=t(c.end)),c.terminatorEnd=Pt(c.end)||&quot;&quot;,a.endsWithParent&amp;&amp;s.terminatorEnd&amp;&amp;(c.terminatorEnd+=(a.end?&quot;|&quot;:&quot;&quot;)+s.terminatorEnd)),a.illegal&amp;&amp;(c.illegalRe=t(a.illegal)),a.contains||(a.contains=[]),a.contains=[].concat(...a.contains.map(function(l){return Nl(l===&quot;self&quot;?a:l)})),a.contains.forEach(function(l){o(l,c)}),a.starts&amp;&amp;o(a.starts,s),c.matcher=i(c),c}if(e.compilerExtensions||(e.compilerExtensions=[]),e.contains&amp;&amp;e.contains.includes(&quot;self&quot;))throw new Error(&quot;ERR: contains `self` is not supported at the top-level of a language.  See documentation.&quot;);return e.classNameAliases=je(e.classNameAliases||{}),o(e)}function aa(e){return e?e.endsWithParent||aa(e.starts):!1}function Nl(e){return e.variants&amp;&amp;!e.cachedVariants&amp;&amp;(e.cachedVariants=e.variants.map(function(t){return je(e,{variants:null},t)})),e.cachedVariants?e.cachedVariants:aa(e)?je(e,{starts:e.starts?je(e.starts):null}):Object.isFrozen(e)?je(e):e}var Ll=&quot;11.9.0&quot;;class Pl extends Error{constructor(t,n){super(t),this.name=&quot;HTMLInjectionError&quot;,this.html=n}}const Ln=Jo,bi=je,yi=Symbol(&quot;nomatch&quot;),kl=7,sa=function(e){const t=Object.create(null),n=Object.create(null),r=[];let i=!0;const o=&quot;Could not find the language &#039;{}&#039;, did you forget to load/include a language module?&quot;,a={disableAutodetect:!0,name:&quot;Plain text&quot;,contains:[]};let s={ignoreUnescapedHTML:!1,throwUnescapedHTML:!1,noHighlightRe:/^(no-?highlight)$/i,languageDetectRe:/\blang(?:uage)?-([\w-]+)\b/i,classPrefix:&quot;hljs-&quot;,cssSelector:&quot;pre code&quot;,languages:null,__emitter:Gu};function c(p){return s.noHighlightRe.test(p)}function f(p){let y=p.className+&quot; &quot;;y+=p.parentNode?p.parentNode.className:&quot;&quot;;const C=s.languageDetectRe.exec(y);if(C){const N=P(C[1]);return N||(_i(o.replace(&quot;{}&quot;,C[1])),_i(&quot;Falling back to no-highlight mode for this block.&quot;,p)),N?C[1]:&quot;no-highlight&quot;}return y.split(/\s+/).find(N=&gt;c(N)||P(N))}function l(p,y,C){let N=&quot;&quot;,W=&quot;&quot;;typeof y==&quot;object&quot;?(N=p,C=y.ignoreIllegals,W=y.language):(lt(&quot;10.7.0&quot;,&quot;highlight(lang, code, ...args) has been deprecated.&quot;),lt(&quot;10.7.0&quot;,`Please use highlight(code, options) instead.
https://github.com/highlightjs/highlight.js/issues/2277`),W=p,N=y),C===void 0&amp;&amp;(C=!0);const J={code:N,language:W};Y(&quot;before:highlight&quot;,J);const re=J.result?J.result:v(J.language,J.code,C);return re.code=J.code,Y(&quot;after:highlight&quot;,re),re}function v(p,y,C,N){const W=Object.create(null);function J(g,x){return g.keywords[x]}function re(){if(!T.keywords){V.addText($);return}let g=0;T.keywordPatternRe.lastIndex=0;let x=T.keywordPatternRe.exec($),D=&quot;&quot;;for(;x;){D+=$.substring(g,x.index);const j=ie.case_insensitive?x[0].toLowerCase():x[0],ne=J(T,j);if(ne){const[me,En]=ne;if(V.addText(D),D=&quot;&quot;,W[j]=(W[j]||0)+1,W[j]&lt;=kl&amp;&amp;(he+=En),me.startsWith(&quot;_&quot;))D+=x[0];else{const d=ie.classNameAliases[me]||me;Z(x[0],d)}}else D+=x[0];g=T.keywordPatternRe.lastIndex,x=T.keywordPatternRe.exec($)}D+=$.substring(g),V.addText(D)}function se(){if($===&quot;&quot;)return;let g=null;if(typeof T.subLanguage==&quot;string&quot;){if(!t[T.subLanguage]){V.addText($);return}g=v(T.subLanguage,$,!0,pe[T.subLanguage]),pe[T.subLanguage]=g._top}else g=_($,T.subLanguage.length?T.subLanguage:null);T.relevance&gt;0&amp;&amp;(he+=g.relevance),V.__addSublanguage(g._emitter,g.language)}function G(){T.subLanguage!=null?se():re(),$=&quot;&quot;}function Z(g,x){g!==&quot;&quot;&amp;&amp;(V.startScope(x),V.addText(g),V.endScope())}function Ce(g,x){let D=1;const j=x.length-1;for(;D&lt;=j;){if(!g._emit[D]){D++;continue}const ne=ie.classNameAliases[g[D]]||g[D],me=x[D];ne?Z(me,ne):($=me,re(),$=&quot;&quot;),D++}}function de(g,x){return g.scope&amp;&amp;typeof g.scope==&quot;string&quot;&amp;&amp;V.openNode(ie.classNameAliases[g.scope]||g.scope),g.beginScope&amp;&amp;(g.beginScope._wrap?(Z($,ie.classNameAliases[g.beginScope._wrap]||g.beginScope._wrap),$=&quot;&quot;):g.beginScope._multi&amp;&amp;(Ce(g.beginScope,x),$=&quot;&quot;)),T=Object.create(g,{parent:{value:T}}),T}function Re(g,x,D){let j=Zu(g.endRe,D);if(j){if(g[&quot;on:end&quot;]){const ne=new pi(g);g[&quot;on:end&quot;](x,ne),ne.isMatchIgnored&amp;&amp;(j=!1)}if(j){for(;g.endsParent&amp;&amp;g.parent;)g=g.parent;return g}}if(g.endsWithParent)return Re(g.parent,x,D)}function Oe(g){return T.matcher.regexIndex===0?($+=g[0],1):(Be=!0,0)}function Le(g){const x=g[0],D=g.rule,j=new pi(D),ne=[D.__beforeBegin,D[&quot;on:begin&quot;]];for(const me of ne)if(me&amp;&amp;(me(g,j),j.isMatchIgnored))return Oe(x);return D.skip?$+=x:(D.excludeBegin&amp;&amp;($+=x),G(),!D.returnBegin&amp;&amp;!D.excludeBegin&amp;&amp;($=x)),de(D,g),D.returnBegin?0:x.length}function st(g){const x=g[0],D=y.substring(g.index),j=Re(T,g,D);if(!j)return yi;const ne=T;T.endScope&amp;&amp;T.endScope._wrap?(G(),Z(x,T.endScope._wrap)):T.endScope&amp;&amp;T.endScope._multi?(G(),Ce(T.endScope,g)):ne.skip?$+=x:(ne.returnEnd||ne.excludeEnd||($+=x),G(),ne.excludeEnd&amp;&amp;($=x));do T.scope&amp;&amp;V.closeNode(),!T.skip&amp;&amp;!T.subLanguage&amp;&amp;(he+=T.relevance),T=T.parent;while(T!==j.parent);return j.starts&amp;&amp;de(j.starts,g),ne.returnEnd?0:x.length}function ze(){const g=[];for(let x=T;x!==ie;x=x.parent)x.scope&amp;&amp;g.unshift(x.scope);g.forEach(x=&gt;V.openNode(x))}let Ie={};function Ve(g,x){const D=x&amp;&amp;x[0];if($+=g,D==null)return G(),0;if(Ie.type===&quot;begin&quot;&amp;&amp;x.type===&quot;end&quot;&amp;&amp;Ie.index===x.index&amp;&amp;D===&quot;&quot;){if($+=y.slice(x.index,x.index+1),!i){const j=new Error(`0 width match regex (${p})`);throw j.languageName=p,j.badRule=Ie.rule,j}return 1}if(Ie=x,x.type===&quot;begin&quot;)return Le(x);if(x.type===&quot;illegal&quot;&amp;&amp;!C){const j=new Error(&#039;Illegal lexeme &quot;&#039;+D+&#039;&quot; for mode &quot;&#039;+(T.scope||&quot;&lt;unnamed&gt;&quot;)+&#039;&quot;&#039;);throw j.mode=T,j}else if(x.type===&quot;end&quot;){const j=st(x);if(j!==yi)return j}if(x.type===&quot;illegal&quot;&amp;&amp;D===&quot;&quot;)return 1;if(ke&gt;1e5&amp;&amp;ke&gt;x.index*3)throw new Error(&quot;potential infinite loop, way more iterations than matches&quot;);return $+=D,D.length}const ie=P(p);if(!ie)throw rt(o.replace(&quot;{}&quot;,p)),new Error(&#039;Unknown language: &quot;&#039;+p+&#039;&quot;&#039;);const qe=Dl(ie);let Pe=&quot;&quot;,T=N||qe;const pe={},V=new s.__emitter(s);ze();let $=&quot;&quot;,he=0,le=0,ke=0,Be=!1;try{if(ie.__emitTokens)ie.__emitTokens(y,V);else{for(T.matcher.considerAll();;){ke++,Be?Be=!1:T.matcher.considerAll(),T.matcher.lastIndex=le;const g=T.matcher.exec(y);if(!g)break;const x=y.substring(le,g.index),D=Ve(x,g);le=g.index+D}Ve(y.substring(le))}return V.finalize(),Pe=V.toHTML(),{language:p,value:Pe,relevance:he,illegal:!1,_emitter:V,_top:T}}catch(g){if(g.message&amp;&amp;g.message.includes(&quot;Illegal&quot;))return{language:p,value:Ln(y),illegal:!0,relevance:0,_illegalBy:{message:g.message,index:le,context:y.slice(le-100,le+100),mode:g.mode,resultSoFar:Pe},_emitter:V};if(i)return{language:p,value:Ln(y),illegal:!1,relevance:0,errorRaised:g,_emitter:V,_top:T};throw g}}function b(p){const y={value:Ln(p),illegal:!1,relevance:0,_top:a,_emitter:new s.__emitter(s)};return y._emitter.addText(p),y}function _(p,y){y=y||s.languages||Object.keys(t);const C=b(p),N=y.filter(P).filter(q).map(G=&gt;v(G,p,!1));N.unshift(C);const W=N.sort((G,Z)=&gt;{if(G.relevance!==Z.relevance)return Z.relevance-G.relevance;if(G.language&amp;&amp;Z.language){if(P(G.language).supersetOf===Z.language)return 1;if(P(Z.language).supersetOf===G.language)return-1}return 0}),[J,re]=W,se=J;return se.secondBest=re,se}function A(p,y,C){const N=y&amp;&amp;n[y]||C;p.classList.add(&quot;hljs&quot;),p.classList.add(`language-${N}`)}function S(p){let y=null;const C=f(p);if(c(C))return;if(Y(&quot;before:highlightElement&quot;,{el:p,language:C}),p.dataset.highlighted){console.log(&quot;Element previously highlighted. To highlight again, first unset `dataset.highlighted`.&quot;,p);return}if(p.children.length&gt;0&amp;&amp;(s.ignoreUnescapedHTML||(console.warn(&quot;One of your code blocks includes unescaped HTML. This is a potentially serious security risk.&quot;),console.warn(&quot;https://github.com/highlightjs/highlight.js/wiki/security&quot;),console.warn(&quot;The element with unescaped HTML:&quot;),console.warn(p)),s.throwUnescapedHTML))throw new Pl(&quot;One of your code blocks includes unescaped HTML.&quot;,p.innerHTML);y=p;const N=y.textContent,W=C?l(N,{language:C,ignoreIllegals:!0}):_(N);p.innerHTML=W.value,p.dataset.highlighted=&quot;yes&quot;,A(p,C,W.language),p.result={language:W.language,re:W.relevance,relevance:W.relevance},W.secondBest&amp;&amp;(p.secondBest={language:W.secondBest.language,relevance:W.secondBest.relevance}),Y(&quot;after:highlightElement&quot;,{el:p,result:W,text:N})}function h(p){s=bi(s,p)}const E=()=&gt;{u(),lt(&quot;10.6.0&quot;,&quot;initHighlighting() deprecated.  Use highlightAll() now.&quot;)};function O(){u(),lt(&quot;10.6.0&quot;,&quot;initHighlightingOnLoad() deprecated.  Use highlightAll() now.&quot;)}let M=!1;function u(){if(document.readyState===&quot;loading&quot;){M=!0;return}document.querySelectorAll(s.cssSelector).forEach(S)}function I(){M&amp;&amp;u()}typeof window&lt;&quot;u&quot;&amp;&amp;window.addEventListener&amp;&amp;window.addEventListener(&quot;DOMContentLoaded&quot;,I,!1);function m(p,y){let C=null;try{C=y(e)}catch(N){if(rt(&quot;Language definition for &#039;{}&#039; could not be registered.&quot;.replace(&quot;{}&quot;,p)),i)rt(N);else throw N;C=a}C.name||(C.name=p),t[p]=C,C.rawDefinition=y.bind(null,e),C.aliases&amp;&amp;H(C.aliases,{languageName:p})}function L(p){delete t[p];for(const y of Object.keys(n))n[y]===p&amp;&amp;delete n[y]}function K(){return Object.keys(t)}function P(p){return p=(p||&quot;&quot;).toLowerCase(),t[p]||t[n[p]]}function H(p,{languageName:y}){typeof p==&quot;string&quot;&amp;&amp;(p=[p]),p.forEach(C=&gt;{n[C.toLowerCase()]=y})}function q(p){const y=P(p);return y&amp;&amp;!y.disableAutodetect}function z(p){p[&quot;before:highlightBlock&quot;]&amp;&amp;!p[&quot;before:highlightElement&quot;]&amp;&amp;(p[&quot;before:highlightElement&quot;]=y=&gt;{p[&quot;before:highlightBlock&quot;](Object.assign({block:y.el},y))}),p[&quot;after:highlightBlock&quot;]&amp;&amp;!p[&quot;after:highlightElement&quot;]&amp;&amp;(p[&quot;after:highlightElement&quot;]=y=&gt;{p[&quot;after:highlightBlock&quot;](Object.assign({block:y.el},y))})}function k(p){z(p),r.push(p)}function U(p){const y=r.indexOf(p);y!==-1&amp;&amp;r.splice(y,1)}function Y(p,y){const C=p;r.forEach(function(N){N[C]&amp;&amp;N[C](y)})}function te(p){return lt(&quot;10.7.0&quot;,&quot;highlightBlock will be removed entirely in v12.0&quot;),lt(&quot;10.7.0&quot;,&quot;Please use highlightElement now.&quot;),S(p)}Object.assign(e,{highlight:l,highlightAuto:_,highlightAll:u,highlightElement:S,highlightBlock:te,configure:h,initHighlighting:E,initHighlightingOnLoad:O,registerLanguage:m,unregisterLanguage:L,listLanguages:K,getLanguage:P,registerAliases:H,autoDetection:q,inherit:bi,addPlugin:k,removePlugin:U}),e.debugMode=function(){i=!1},e.safeMode=function(){i=!0},e.versionString=Ll,e.regex={concat:at,lookahead:Zo,either:Ir,optional:Yu,anyNumberOfTimes:Xu};for(const p in Qt)typeof Qt[p]==&quot;object&quot;&amp;&amp;Yo(Qt[p]);return Object.assign(e,Qt),e},bt=sa({});bt.newInstance=()=&gt;sa({});var Bl=bt;bt.HighlightJS=bt;bt.default=bt;const xn=Ku(Bl);function $l(e){const t=e.regex,n=/(?![A-Za-z0-9])(?![$])/,r=t.concat(/[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/,n),i=t.concat(/(\\?[A-Z][a-z0-9_\x7f-\xff]+|\\?[A-Z]+(?=[A-Z][a-z0-9_\x7f-\xff])){1,}/,n),o={scope:&quot;variable&quot;,match:&quot;\\$+&quot;+r},a={scope:&quot;meta&quot;,variants:[{begin:/&lt;\?php/,relevance:10},{begin:/&lt;\?=/},{begin:/&lt;\?/,relevance:.1},{begin:/\?&gt;/}]},s={scope:&quot;subst&quot;,variants:[{begin:/\$\w+/},{begin:/\{\$/,end:/\}/}]},c=e.inherit(e.APOS_STRING_MODE,{illegal:null}),f=e.inherit(e.QUOTE_STRING_MODE,{illegal:null,contains:e.QUOTE_STRING_MODE.contains.concat(s)}),l={begin:/&lt;&lt;&lt;[ \t]*(?:(\w+)|&quot;(\w+)&quot;)\n/,end:/[ \t]*(\w+)\b/,contains:e.QUOTE_STRING_MODE.contains.concat(s),&quot;on:begin&quot;:(k,U)=&gt;{U.data._beginMatch=k[1]||k[2]},&quot;on:end&quot;:(k,U)=&gt;{U.data._beginMatch!==k[1]&amp;&amp;U.ignoreMatch()}},v=e.END_SAME_AS_BEGIN({begin:/&lt;&lt;&lt;[ \t]*&#039;(\w+)&#039;\n/,end:/[ \t]*(\w+)\b/}),b=`[
]`,_={scope:&quot;string&quot;,variants:[f,c,l,v]},A={scope:&quot;number&quot;,variants:[{begin:&quot;\\b0[bB][01]+(?:_[01]+)*\\b&quot;},{begin:&quot;\\b0[oO][0-7]+(?:_[0-7]+)*\\b&quot;},{begin:&quot;\\b0[xX][\\da-fA-F]+(?:_[\\da-fA-F]+)*\\b&quot;},{begin:&quot;(?:\\b\\d+(?:_\\d+)*(\\.(?:\\d+(?:_\\d+)*))?|\\B\\.\\d+)(?:[eE][+-]?\\d+)?&quot;}],relevance:0},S=[&quot;false&quot;,&quot;null&quot;,&quot;true&quot;],h=[&quot;__CLASS__&quot;,&quot;__DIR__&quot;,&quot;__FILE__&quot;,&quot;__FUNCTION__&quot;,&quot;__COMPILER_HALT_OFFSET__&quot;,&quot;__LINE__&quot;,&quot;__METHOD__&quot;,&quot;__NAMESPACE__&quot;,&quot;__TRAIT__&quot;,&quot;die&quot;,&quot;echo&quot;,&quot;exit&quot;,&quot;include&quot;,&quot;include_once&quot;,&quot;print&quot;,&quot;require&quot;,&quot;require_once&quot;,&quot;array&quot;,&quot;abstract&quot;,&quot;and&quot;,&quot;as&quot;,&quot;binary&quot;,&quot;bool&quot;,&quot;boolean&quot;,&quot;break&quot;,&quot;callable&quot;,&quot;case&quot;,&quot;catch&quot;,&quot;class&quot;,&quot;clone&quot;,&quot;const&quot;,&quot;continue&quot;,&quot;declare&quot;,&quot;default&quot;,&quot;do&quot;,&quot;double&quot;,&quot;else&quot;,&quot;elseif&quot;,&quot;empty&quot;,&quot;enddeclare&quot;,&quot;endfor&quot;,&quot;endforeach&quot;,&quot;endif&quot;,&quot;endswitch&quot;,&quot;endwhile&quot;,&quot;enum&quot;,&quot;eval&quot;,&quot;extends&quot;,&quot;final&quot;,&quot;finally&quot;,&quot;float&quot;,&quot;for&quot;,&quot;foreach&quot;,&quot;from&quot;,&quot;global&quot;,&quot;goto&quot;,&quot;if&quot;,&quot;implements&quot;,&quot;instanceof&quot;,&quot;insteadof&quot;,&quot;int&quot;,&quot;integer&quot;,&quot;interface&quot;,&quot;isset&quot;,&quot;iterable&quot;,&quot;list&quot;,&quot;match|0&quot;,&quot;mixed&quot;,&quot;new&quot;,&quot;never&quot;,&quot;object&quot;,&quot;or&quot;,&quot;private&quot;,&quot;protected&quot;,&quot;public&quot;,&quot;readonly&quot;,&quot;real&quot;,&quot;return&quot;,&quot;string&quot;,&quot;switch&quot;,&quot;throw&quot;,&quot;trait&quot;,&quot;try&quot;,&quot;unset&quot;,&quot;use&quot;,&quot;var&quot;,&quot;void&quot;,&quot;while&quot;,&quot;xor&quot;,&quot;yield&quot;],E=[&quot;Error|0&quot;,&quot;AppendIterator&quot;,&quot;ArgumentCountError&quot;,&quot;ArithmeticError&quot;,&quot;ArrayIterator&quot;,&quot;ArrayObject&quot;,&quot;AssertionError&quot;,&quot;BadFunctionCallException&quot;,&quot;BadMethodCallException&quot;,&quot;CachingIterator&quot;,&quot;CallbackFilterIterator&quot;,&quot;CompileError&quot;,&quot;Countable&quot;,&quot;DirectoryIterator&quot;,&quot;DivisionByZeroError&quot;,&quot;DomainException&quot;,&quot;EmptyIterator&quot;,&quot;ErrorException&quot;,&quot;Exception&quot;,&quot;FilesystemIterator&quot;,&quot;FilterIterator&quot;,&quot;GlobIterator&quot;,&quot;InfiniteIterator&quot;,&quot;InvalidArgumentException&quot;,&quot;IteratorIterator&quot;,&quot;LengthException&quot;,&quot;LimitIterator&quot;,&quot;LogicException&quot;,&quot;MultipleIterator&quot;,&quot;NoRewindIterator&quot;,&quot;OutOfBoundsException&quot;,&quot;OutOfRangeException&quot;,&quot;OuterIterator&quot;,&quot;OverflowException&quot;,&quot;ParentIterator&quot;,&quot;ParseError&quot;,&quot;RangeException&quot;,&quot;RecursiveArrayIterator&quot;,&quot;RecursiveCachingIterator&quot;,&quot;RecursiveCallbackFilterIterator&quot;,&quot;RecursiveDirectoryIterator&quot;,&quot;RecursiveFilterIterator&quot;,&quot;RecursiveIterator&quot;,&quot;RecursiveIteratorIterator&quot;,&quot;RecursiveRegexIterator&quot;,&quot;RecursiveTreeIterator&quot;,&quot;RegexIterator&quot;,&quot;RuntimeException&quot;,&quot;SeekableIterator&quot;,&quot;SplDoublyLinkedList&quot;,&quot;SplFileInfo&quot;,&quot;SplFileObject&quot;,&quot;SplFixedArray&quot;,&quot;SplHeap&quot;,&quot;SplMaxHeap&quot;,&quot;SplMinHeap&quot;,&quot;SplObjectStorage&quot;,&quot;SplObserver&quot;,&quot;SplPriorityQueue&quot;,&quot;SplQueue&quot;,&quot;SplStack&quot;,&quot;SplSubject&quot;,&quot;SplTempFileObject&quot;,&quot;TypeError&quot;,&quot;UnderflowException&quot;,&quot;UnexpectedValueException&quot;,&quot;UnhandledMatchError&quot;,&quot;ArrayAccess&quot;,&quot;BackedEnum&quot;,&quot;Closure&quot;,&quot;Fiber&quot;,&quot;Generator&quot;,&quot;Iterator&quot;,&quot;IteratorAggregate&quot;,&quot;Serializable&quot;,&quot;Stringable&quot;,&quot;Throwable&quot;,&quot;Traversable&quot;,&quot;UnitEnum&quot;,&quot;WeakReference&quot;,&quot;WeakMap&quot;,&quot;Directory&quot;,&quot;__PHP_Incomplete_Class&quot;,&quot;parent&quot;,&quot;php_user_filter&quot;,&quot;self&quot;,&quot;static&quot;,&quot;stdClass&quot;],M={keyword:h,literal:(k=&gt;{const U=[];return k.forEach(Y=&gt;{U.push(Y),Y.toLowerCase()===Y?U.push(Y.toUpperCase()):U.push(Y.toLowerCase())}),U})(S),built_in:E},u=k=&gt;k.map(U=&gt;U.replace(/\|\d+$/,&quot;&quot;)),I={variants:[{match:[/new/,t.concat(b,&quot;+&quot;),t.concat(&quot;(?!&quot;,u(E).join(&quot;\\b|&quot;),&quot;\\b)&quot;),i],scope:{1:&quot;keyword&quot;,4:&quot;title.class&quot;}}]},m=t.concat(r,&quot;\\b(?!\\()&quot;),L={variants:[{match:[t.concat(/::/,t.lookahead(/(?!class\b)/)),m],scope:{2:&quot;variable.constant&quot;}},{match:[/::/,/class/],scope:{2:&quot;variable.language&quot;}},{match:[i,t.concat(/::/,t.lookahead(/(?!class\b)/)),m],scope:{1:&quot;title.class&quot;,3:&quot;variable.constant&quot;}},{match:[i,t.concat(&quot;::&quot;,t.lookahead(/(?!class\b)/))],scope:{1:&quot;title.class&quot;}},{match:[i,/::/,/class/],scope:{1:&quot;title.class&quot;,3:&quot;variable.language&quot;}}]},K={scope:&quot;attr&quot;,match:t.concat(r,t.lookahead(&quot;:&quot;),t.lookahead(/(?!::)/))},P={relevance:0,begin:/\(/,end:/\)/,keywords:M,contains:[K,o,L,e.C_BLOCK_COMMENT_MODE,_,A,I]},H={relevance:0,match:[/\b/,t.concat(&quot;(?!fn\\b|function\\b|&quot;,u(h).join(&quot;\\b|&quot;),&quot;|&quot;,u(E).join(&quot;\\b|&quot;),&quot;\\b)&quot;),r,t.concat(b,&quot;*&quot;),t.lookahead(/(?=\()/)],scope:{3:&quot;title.function.invoke&quot;},contains:[P]};P.contains.push(H);const q=[K,L,e.C_BLOCK_COMMENT_MODE,_,A,I],z={begin:t.concat(/#\[\s*/,i),beginScope:&quot;meta&quot;,end:/]/,endScope:&quot;meta&quot;,keywords:{literal:S,keyword:[&quot;new&quot;,&quot;array&quot;]},contains:[{begin:/\[/,end:/]/,keywords:{literal:S,keyword:[&quot;new&quot;,&quot;array&quot;]},contains:[&quot;self&quot;,...q]},...q,{scope:&quot;meta&quot;,match:i}]};return{case_insensitive:!1,keywords:M,contains:[z,e.HASH_COMMENT_MODE,e.COMMENT(&quot;//&quot;,&quot;$&quot;),e.COMMENT(&quot;/\\*&quot;,&quot;\\*/&quot;,{contains:[{scope:&quot;doctag&quot;,match:&quot;@[A-Za-z]+&quot;}]}),{match:/__halt_compiler\(\);/,keywords:&quot;__halt_compiler&quot;,starts:{scope:&quot;comment&quot;,end:e.MATCH_NOTHING_RE,contains:[{match:/\?&gt;/,scope:&quot;meta&quot;,endsParent:!0}]}},a,{scope:&quot;variable.language&quot;,match:/\$this\b/},o,H,L,{match:[/const/,/\s/,r],scope:{1:&quot;keyword&quot;,3:&quot;variable.constant&quot;}},I,{scope:&quot;function&quot;,relevance:0,beginKeywords:&quot;fn function&quot;,end:/[;{]/,excludeEnd:!0,illegal:&quot;[$%\\[]&quot;,contains:[{beginKeywords:&quot;use&quot;},e.UNDERSCORE_TITLE_MODE,{begin:&quot;=&gt;&quot;,endsParent:!0},{scope:&quot;params&quot;,begin:&quot;\\(&quot;,end:&quot;\\)&quot;,excludeBegin:!0,excludeEnd:!0,keywords:M,contains:[&quot;self&quot;,o,L,e.C_BLOCK_COMMENT_MODE,_,A]}]},{scope:&quot;class&quot;,variants:[{beginKeywords:&quot;enum&quot;,illegal:/[($&quot;]/},{beginKeywords:&quot;class interface trait&quot;,illegal:/[:($&quot;]/}],relevance:0,end:/\{/,excludeEnd:!0,contains:[{beginKeywords:&quot;extends implements&quot;},e.UNDERSCORE_TITLE_MODE]},{beginKeywords:&quot;namespace&quot;,relevance:0,end:&quot;;&quot;,illegal:/[.&#039;]/,contains:[e.inherit(e.UNDERSCORE_TITLE_MODE,{scope:&quot;title.class&quot;})]},{beginKeywords:&quot;use&quot;,relevance:0,end:&quot;;&quot;,contains:[{match:/\b(as|const|function)\b/,scope:&quot;keyword&quot;},e.UNDERSCORE_TITLE_MODE]},_,A]}}Wu.start();xn.registerLanguage(&quot;php&quot;,$l);window.hljs=xn;xn.highlightElement(document.querySelector(&quot;.default-highlightable-code&quot;));document.querySelectorAll(&quot;.highlightable-code&quot;).forEach(e=&gt;{e.dataset.highlighted!==&quot;yes&quot;&amp;&amp;xn.highlightElement(e)});jt(&quot;[data-tippy-content]&quot;,{trigger:&quot;click&quot;,arrow:!0,theme:&quot;material&quot;,animation:&quot;scale&quot;});
    &lt;/script&gt;

    &lt;script&gt;
        !function(r,o){&quot;use strict&quot;;var e,i=&quot;hljs-ln&quot;,l=&quot;hljs-ln-line&quot;,h=&quot;hljs-ln-code&quot;,s=&quot;hljs-ln-numbers&quot;,c=&quot;hljs-ln-n&quot;,m=&quot;data-line-number&quot;,a=/\r\n|\r|\n/g;function u(e){for(var n=e.toString(),t=e.anchorNode;&quot;TD&quot;!==t.nodeName;)t=t.parentNode;for(var r=e.focusNode;&quot;TD&quot;!==r.nodeName;)r=r.parentNode;var o=parseInt(t.dataset.lineNumber),a=parseInt(r.dataset.lineNumber);if(o==a)return n;var i,l=t.textContent,s=r.textContent;for(a&lt;o&amp;&amp;(i=o,o=a,a=i,i=l,l=s,s=i);0!==n.indexOf(l);)l=l.slice(1);for(;-1===n.lastIndexOf(s);)s=s.slice(0,-1);for(var c=l,u=function(e){for(var n=e;&quot;TABLE&quot;!==n.nodeName;)n=n.parentNode;return n}(t),d=o+1;d&lt;a;++d){var f=p(&#039;.{0}[{1}=&quot;{2}&quot;]&#039;,[h,m,d]);c+=&quot;\n&quot;+u.querySelector(f).textContent}return c+=&quot;\n&quot;+s}function n(e){try{var n=o.querySelectorAll(&quot;code.hljs,code.nohighlight&quot;);for(var t in n)n.hasOwnProperty(t)&amp;&amp;(n[t].classList.contains(&quot;nohljsln&quot;)||d(n[t],e))}catch(e){r.console.error(&quot;LineNumbers error: &quot;,e)}}function d(e,n){&quot;object&quot;==typeof e&amp;&amp;r.setTimeout(function(){e.innerHTML=f(e,n)},0)}function f(e,n){var t,r,o=(t=e,{singleLine:function(e){return!!e.singleLine&amp;&amp;e.singleLine}(r=(r=n)||{}),startFrom:function(e,n){var t=1;isFinite(n.startFrom)&amp;&amp;(t=n.startFrom);var r=function(e,n){return e.hasAttribute(n)?e.getAttribute(n):null}(e,&quot;data-ln-start-from&quot;);return null!==r&amp;&amp;(t=function(e,n){if(!e)return n;var t=Number(e);return isFinite(t)?t:n}(r,1)),t}(t,r)});return function e(n){var t=n.childNodes;for(var r in t){var o;t.hasOwnProperty(r)&amp;&amp;(o=t[r],0&lt;(o.textContent.trim().match(a)||[]).length&amp;&amp;(0&lt;o.childNodes.length?e(o):v(o.parentNode)))}}(e),function(e,n){var t=g(e);&quot;&quot;===t[t.length-1].trim()&amp;&amp;t.pop();if(1&lt;t.length||n.singleLine){for(var r=&quot;&quot;,o=0,a=t.length;o&lt;a;o++)r+=p(&#039;&lt;tr&gt;&lt;td class=&quot;{0} {1}&quot; {3}=&quot;{5}&quot;&gt;&lt;div class=&quot;{2}&quot; {3}=&quot;{5}&quot;&gt;&lt;/div&gt;&lt;/td&gt;&lt;td class=&quot;{0} {4}&quot; {3}=&quot;{5}&quot;&gt;{6}&lt;/td&gt;&lt;/tr&gt;&#039;,[l,s,c,m,h,o+n.startFrom,0&lt;t[o].length?t[o]:&quot; &quot;]);return p(&#039;&lt;table class=&quot;{0}&quot;&gt;{1}&lt;/table&gt;&#039;,[i,r])}return e}(e.innerHTML,o)}function v(e){var n=e.className;if(/hljs-/.test(n)){for(var t=g(e.innerHTML),r=0,o=&quot;&quot;;r&lt;t.length;r++){o+=p(&#039;&lt;span class=&quot;{0}&quot;&gt;{1}&lt;/span&gt;\n&#039;,[n,0&lt;t[r].length?t[r]:&quot; &quot;])}e.innerHTML=o.trim()}}function g(e){return 0===e.length?[]:e.split(a)}function p(e,t){return e.replace(/\{(\d+)\}/g,function(e,n){return void 0!==t[n]?t[n]:e})}r.hljs?(r.hljs.initLineNumbersOnLoad=function(e){&quot;interactive&quot;===o.readyState||&quot;complete&quot;===o.readyState?n(e):r.addEventListener(&quot;DOMContentLoaded&quot;,function(){n(e)})},r.hljs.lineNumbersBlock=d,r.hljs.lineNumbersValue=function(e,n){if(&quot;string&quot;!=typeof e)return;var t=document.createElement(&quot;code&quot;);return t.innerHTML=e,f(t,n)},(e=o.createElement(&quot;style&quot;)).type=&quot;text/css&quot;,e.innerHTML=p(&quot;.{0}{border-collapse:collapse}.{0} td{padding:0}.{1}:before{content:attr({2})}&quot;,[i,c,m]),o.getElementsByTagName(&quot;head&quot;)[0].appendChild(e)):r.console.error(&quot;highlight.js not detected!&quot;),document.addEventListener(&quot;copy&quot;,function(e){var n,t=window.getSelection();!function(e){for(var n=e;n;){if(n.className&amp;&amp;-1!==n.className.indexOf(&quot;hljs-ln-code&quot;))return 1;n=n.parentNode}}(t.anchorNode)||(n=-1!==window.navigator.userAgent.indexOf(&quot;Edge&quot;)?u(t):t.toString(),e.clipboardData.setData(&quot;text/plain&quot;,n),e.preventDefault())})}(window,document);

        hljs.initLineNumbersOnLoad()

        window.addEventListener(&#039;load&#039;, function() {
            document.querySelectorAll(&#039;.renderer&#039;).forEach(function(element, index) {
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 1"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Filesystem\Filesystem.php</span>
                    
                    <span class="font-mono text-xs">:124</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-1"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="124"
                    data-ln-start-from="119"
                >
            return (static function () use ($__path, $__data) {
                extract($__data, EXTR_SKIP);

                return require $__path;
            })();
        }

        throw new FileNotFoundException(&quot;File does not exist at path {$path}.&quot;);
    }

    /**
     * Require the given file once.
     *
     * @param  string  $path
     * @param  array  $data
     * @return mixed
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 2"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\View\Engines\PhpEngine.php</span>
                    
                    <span class="font-mono text-xs">:57</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-2"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="57"
                    data-ln-start-from="52"
                >
        // We&#039;ll evaluate the contents of the view inside a try/catch block so we can
        // flush out any stray output that might get out before an error occurs or
        // an exception is thrown. This prevents any partial views from leaking.
        try {
            $this-&gt;files-&gt;getRequire($path, $data);
        } catch (Throwable $e) {
            $this-&gt;handleViewException($e, $obLevel);
        }

        return ltrim(ob_get_clean());
    }

    /**
     * Handle a view exception.
     *
     * @param  \Throwable  $e
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 3"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\View\Engines\CompilerEngine.php</span>
                    
                    <span class="font-mono text-xs">:74</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-3"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="74"
                    data-ln-start-from="69"
                >        // Once we have the path to the compiled file, we will evaluate the paths with
        // typical PHP just like any other templates. We also keep a stack of views
        // which have been rendered for right exception messages to be generated.

        try {
            $results = $this-&gt;evaluatePath($this-&gt;compiler-&gt;getCompiledPath($path), $data);
        } catch (ViewException $e) {
            if (! Str::of($e-&gt;getMessage())-&gt;contains([&#039;No such file or directory&#039;, &#039;File does not exist at path&#039;])) {
                throw $e;
            }

            if (! isset($this-&gt;compiledOrNotExpired[$path])) {
                throw $e;
            }

            $this-&gt;compiler-&gt;compile($path);

</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 4"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\View\View.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-4"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >     *
     * @return string
     */
    protected function getContents()
    {
        return $this-&gt;engine-&gt;get($this-&gt;path, $this-&gt;gatherData());
    }

    /**
     * Get the data bound to the view instance.
     *
     * @return array
     */
    public function gatherData()
    {
        $data = array_merge($this-&gt;factory-&gt;getShared(), $this-&gt;data);

</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 5"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\View\View.php</span>
                    
                    <span class="font-mono text-xs">:191</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-5"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="191"
                    data-ln-start-from="186"
                >        // clear out the sections for any separate views that may be rendered.
        $this-&gt;factory-&gt;incrementRender();

        $this-&gt;factory-&gt;callComposer($this);

        $contents = $this-&gt;getContents();

        // Once we&#039;ve finished rendering the view, we&#039;ll decrement the render count
        // so that each section gets flushed out next time a view is created and
        // no old sections are staying around in the memory of an environment.
        $this-&gt;factory-&gt;decrementRender();

        return $contents;
    }

    /**
     * Get the evaluated contents of the view.
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 6"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\View\View.php</span>
                    
                    <span class="font-mono text-xs">:160</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-6"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="160"
                    data-ln-start-from="155"
                >     * @throws \Throwable
     */
    public function render(?callable $callback = null)
    {
        try {
            $contents = $this-&gt;renderContents();

            $response = isset($callback) ? $callback($this, $contents) : null;

            // Once we have the contents of the view, we will flush the sections if we are
            // done rendering all views so that there is nothing left hanging over when
            // another view gets rendered in the future by the application developer.
            $this-&gt;factory-&gt;flushStateIfDoneRendering();

            return ! is_null($response) ? $response : $contents;
        } catch (Throwable $e) {
            $this-&gt;factory-&gt;flushState();
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 7"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Http\Response.php</span>
                    
                    <span class="font-mono text-xs">:78</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-7"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="78"
                    data-ln-start-from="73"
                >
        // If this content implements the &quot;Renderable&quot; interface then we will call the
        // render method on the object so we will avoid any &quot;__toString&quot; exceptions
        // that might be thrown and have their errors obscured by PHP&#039;s handling.
        elseif ($content instanceof Renderable) {
            $content = $content-&gt;render();
        }

        parent::setContent($content);

        return $this;
    }

    /**
     * Determine if the given content should be turned into JSON.
     *
     * @param  mixed  $content
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 8"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Http\Response.php</span>
                    
                    <span class="font-mono text-xs">:34</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-8"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="34"
                    data-ln-start-from="29"
                >     */
    public function __construct($content = &#039;&#039;, $status = 200, array $headers = [])
    {
        $this-&gt;headers = new ResponseHeaderBag($headers);

        $this-&gt;setContent($content);
        $this-&gt;setStatusCode($status);
        $this-&gt;setProtocolVersion(&#039;1.0&#039;);
    }

    /**
     * Get the response content.
     */
    #[\Override]
    public function getContent(): string|false
    {
        return transform(parent::getContent(), fn ($content) =&gt; $content, &#039;&#039;);
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 9"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span>
                    
                    <span class="font-mono text-xs">:924</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-9"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="924"
                    data-ln-start-from="919"
                >                    $response instanceof JsonSerializable ||
                    $response instanceof stdClass ||
                    is_array($response))) {
            $response = new JsonResponse($response);
        } elseif (! $response instanceof SymfonyResponse) {
            $response = new Response($response, 200, [&#039;Content-Type&#039; =&gt; &#039;text/html&#039;]);
        }

        if ($response-&gt;getStatusCode() === Response::HTTP_NOT_MODIFIED) {
            $response-&gt;setNotModified();
        }

        return $response-&gt;prepare($request);
    }

    /**
     * Substitute the route bindings onto the route.
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 10"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span>
                    
                    <span class="font-mono text-xs">:891</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-10"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="891"
                    data-ln-start-from="886"
                >     */
    public function prepareResponse($request, $response)
    {
        $this-&gt;events-&gt;dispatch(new PreparingResponse($request, $response));

        return tap(static::toResponse($request, $response), function ($response) use ($request) {
            $this-&gt;events-&gt;dispatch(new ResponsePrepared($request, $response));
        });
    }

    /**
     * Static version of prepareResponse.
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @param  mixed  $response
     * @return \Symfony\Component\HttpFoundation\Response
     */
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 11"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span>
                    
                    <span class="font-mono text-xs">:807</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-11"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="807"
                    data-ln-start-from="802"
                >        $middleware = $shouldSkipMiddleware ? [] : $this-&gt;gatherRouteMiddleware($route);

        return (new Pipeline($this-&gt;container))
            -&gt;send($request)
            -&gt;through($middleware)
            -&gt;then(fn ($request) =&gt; $this-&gt;prepareResponse(
                $request, $route-&gt;run()
            ));
    }

    /**
     * Gather the middleware for the given route with resolved class names.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return array
     */
    public function gatherRouteMiddleware(Route $route)
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 12"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:169</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-12"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="169"
                    data-ln-start-from="164"
                >     */
    protected function prepareDestination(Closure $destination)
    {
        return function ($passable) use ($destination) {
            try {
                return $destination($passable);
            } catch (Throwable $e) {
                return $this-&gt;handleException($passable, $e);
            }
        };
    }

    /**
     * Get a Closure that represents a slice of the application onion.
     *
     * @return \Closure
     */
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 13"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php</span>
                    
                    <span class="font-mono text-xs">:50</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-13"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="50"
                    data-ln-start-from="45"
                >            }

            throw $exception;
        }

        return $next($request);
    }
}
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 14"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-14"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 15"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken.php</span>
                    
                    <span class="font-mono text-xs">:87</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-15"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="87"
                    data-ln-start-from="82"
                >            $this-&gt;isReading($request) ||
            $this-&gt;runningUnitTests() ||
            $this-&gt;inExceptArray($request) ||
            $this-&gt;tokensMatch($request)
        ) {
            return tap($next($request), function ($response) use ($request) {
                if ($this-&gt;shouldAddXsrfTokenCookie()) {
                    $this-&gt;addCookieToResponse($request, $response);
                }
            });
        }

        throw new TokenMismatchException(&#039;CSRF token mismatch.&#039;);
    }

    /**
     * Determine if the HTTP request uses a ‘read’ verb.
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 16"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-16"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 17"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php</span>
                    
                    <span class="font-mono text-xs">:48</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-17"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="48"
                    data-ln-start-from="43"
                >
        // Putting the errors in the view for every view allows the developer to just
        // assume that some errors are always available, which is convenient since
        // they don&#039;t have to continually run checks for the presence of errors.

        return $next($request);
    }
}
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 18"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-18"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 19"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php</span>
                    
                    <span class="font-mono text-xs">:120</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-19"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="120"
                    data-ln-start-from="115"
                >            $this-&gt;startSession($request, $session)
        );

        $this-&gt;collectGarbage($session);

        $response = $next($request);

        $this-&gt;storeCurrentUrl($request, $session);

        $this-&gt;addCookieToResponse($response, $session);

        // Again, if the session has been configured we will need to close out the session
        // so that the attributes may be persisted to some storage medium. We will also
        // add the session identifier cookie to the application response headers now.
        $this-&gt;saveSession($request);

        return $response;
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 20"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php</span>
                    
                    <span class="font-mono text-xs">:63</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-20"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="63"
                    data-ln-start-from="58"
                >        if ($this-&gt;manager-&gt;shouldBlock() ||
            ($request-&gt;route() instanceof Route &amp;&amp; $request-&gt;route()-&gt;locksFor())) {
            return $this-&gt;handleRequestWhileBlocking($request, $session, $next);
        }

        return $this-&gt;handleStatefulRequest($request, $session, $next);
    }

    /**
     * Handle the given request within session state.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Session\Session  $session
     * @param  \Closure  $next
     * @return mixed
     */
    protected function handleRequestWhileBlocking(Request $request, $session, Closure $next)
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 21"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-21"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 22"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php</span>
                    
                    <span class="font-mono text-xs">:36</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-22"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="36"
                    data-ln-start-from="31"
                >     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        foreach ($this-&gt;cookies-&gt;getQueuedCookies() as $cookie) {
            $response-&gt;headers-&gt;setCookie($cookie);
        }

        return $response;
    }
}
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 23"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-23"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 24"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php</span>
                    
                    <span class="font-mono text-xs">:74</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-24"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="74"
                    data-ln-start-from="69"
                >     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, Closure $next)
    {
        return $this-&gt;encrypt($next($this-&gt;decrypt($request)));
    }

    /**
     * Decrypt the cookies on the request.
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @return \Symfony\Component\HttpFoundation\Request
     */
    protected function decrypt(Request $request)
    {
        foreach ($request-&gt;cookies as $key =&gt; $cookie) {
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 25"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-25"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 26"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:126</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-26"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="126"
                    data-ln-start-from="121"
                >        $pipeline = array_reduce(
            array_reverse($this-&gt;pipes()), $this-&gt;carry(), $this-&gt;prepareDestination($destination)
        );

        try {
            return $pipeline($this-&gt;passable);
        } finally {
            if ($this-&gt;finally) {
                ($this-&gt;finally)($this-&gt;passable);
            }
        }
    }

    /**
     * Run the pipeline and return the result.
     *
     * @return mixed
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 27"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span>
                    
                    <span class="font-mono text-xs">:807</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-27"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="807"
                    data-ln-start-from="802"
                >        $middleware = $shouldSkipMiddleware ? [] : $this-&gt;gatherRouteMiddleware($route);

        return (new Pipeline($this-&gt;container))
            -&gt;send($request)
            -&gt;through($middleware)
            -&gt;then(fn ($request) =&gt; $this-&gt;prepareResponse(
                $request, $route-&gt;run()
            ));
    }

    /**
     * Gather the middleware for the given route with resolved class names.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return array
     */
    public function gatherRouteMiddleware(Route $route)
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 28"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span>
                    
                    <span class="font-mono text-xs">:786</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-28"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="786"
                    data-ln-start-from="781"
                >        $request-&gt;setRouteResolver(fn () =&gt; $route);

        $this-&gt;events-&gt;dispatch(new RouteMatched($route, $request));

        return $this-&gt;prepareResponse($request,
            $this-&gt;runRouteWithinStack($route, $request)
        );
    }

    /**
     * Run the given route within a Stack &quot;onion&quot; instance.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function runRouteWithinStack(Route $route, Request $request)
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 29"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span>
                    
                    <span class="font-mono text-xs">:750</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-29"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="750"
                    data-ln-start-from="745"
                >     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatchToRoute(Request $request)
    {
        return $this-&gt;runRoute($request, $this-&gt;findRoute($request));
    }

    /**
     * Find the route matching a given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Routing\Route
     */
    protected function findRoute($request)
    {
        $this-&gt;events-&gt;dispatch(new Routing($request));
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 30"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span>
                    
                    <span class="font-mono text-xs">:739</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-30"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="739"
                    data-ln-start-from="734"
                >     */
    public function dispatch(Request $request)
    {
        $this-&gt;currentRequest = $request;

        return $this-&gt;dispatchToRoute($request);
    }

    /**
     * Dispatch the request to a route and return the response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatchToRoute(Request $request)
    {
        return $this-&gt;runRoute($request, $this-&gt;findRoute($request));
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 31"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php</span>
                    
                    <span class="font-mono text-xs">:200</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-31"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="200"
                    data-ln-start-from="195"
                >    protected function dispatchToRouter()
    {
        return function ($request) {
            $this-&gt;app-&gt;instance(&#039;request&#039;, $request);

            return $this-&gt;router-&gt;dispatch($request);
        };
    }

    /**
     * Call the terminate method on any terminable middleware.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function terminate($request, $response)
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 32"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:169</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-32"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="169"
                    data-ln-start-from="164"
                >     */
    protected function prepareDestination(Closure $destination)
    {
        return function ($passable) use ($destination) {
            try {
                return $destination($passable);
            } catch (Throwable $e) {
                return $this-&gt;handleException($passable, $e);
            }
        };
    }

    /**
     * Get a Closure that represents a slice of the application onion.
     *
     * @return \Closure
     */
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 33"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php</span>
                    
                    <span class="font-mono text-xs">:21</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-33"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="21"
                    data-ln-start-from="16"
                >     */
    public function handle($request, Closure $next)
    {
        $this-&gt;clean($request);

        return $next($request);
    }

    /**
     * Clean the request&#039;s data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function clean($request)
    {
        $this-&gt;cleanParameterBag($request-&gt;query);
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 34"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php</span>
                    
                    <span class="font-mono text-xs">:31</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-34"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="31"
                    data-ln-start-from="26"
                >            if ($callback($request)) {
                return $next($request);
            }
        }

        return parent::handle($request, $next);
    }

    /**
     * Transform the given value.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 35"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-35"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 36"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php</span>
                    
                    <span class="font-mono text-xs">:21</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-36"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="21"
                    data-ln-start-from="16"
                >     */
    public function handle($request, Closure $next)
    {
        $this-&gt;clean($request);

        return $next($request);
    }

    /**
     * Clean the request&#039;s data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function clean($request)
    {
        $this-&gt;cleanParameterBag($request-&gt;query);
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 37"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php</span>
                    
                    <span class="font-mono text-xs">:51</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-37"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="51"
                    data-ln-start-from="46"
                >            if ($callback($request)) {
                return $next($request);
            }
        }

        return parent::handle($request, $next);
    }

    /**
     * Transform the given value.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 38"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-38"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 39"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Http\Middleware\ValidatePostSize.php</span>
                    
                    <span class="font-mono text-xs">:27</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-39"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="27"
                    data-ln-start-from="22"
                >
        if ($max &gt; 0 &amp;&amp; $request-&gt;server(&#039;CONTENT_LENGTH&#039;) &gt; $max) {
            throw new PostTooLargeException(&#039;The POST data is too large.&#039;);
        }

        return $next($request);
    }

    /**
     * Determine the server &#039;post_max_size&#039; as bytes.
     *
     * @return int
     */
    protected function getPostMaxSize()
    {
        if (is_numeric($postMaxSize = ini_get(&#039;post_max_size&#039;))) {
            return (int) $postMaxSize;
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 40"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-40"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 41"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php</span>
                    
                    <span class="font-mono text-xs">:109</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-41"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="109"
                    data-ln-start-from="104"
                >                null,
                $this-&gt;getHeaders($data)
            );
        }

        return $next($request);
    }

    /**
     * Determine if the incoming request has a maintenance mode bypass cookie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $data
     * @return bool
     */
    protected function hasValidBypassCookie($request, array $data)
    {
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 42"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-42"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 43"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php</span>
                    
                    <span class="font-mono text-xs">:48</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-43"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="48"
                    data-ln-start-from="43"
                >     * @return \Illuminate\Http\Response
     */
    public function handle($request, Closure $next)
    {
        if (! $this-&gt;hasMatchingPath($request)) {
            return $next($request);
        }

        $this-&gt;cors-&gt;setOptions($this-&gt;container[&#039;config&#039;]-&gt;get(&#039;cors&#039;, []));

        if ($this-&gt;cors-&gt;isPreflightRequest($request)) {
            $response = $this-&gt;cors-&gt;handlePreflightRequest($request);

            $this-&gt;cors-&gt;varyHeader($response, &#039;Access-Control-Request-Method&#039;);

            return $response;
        }
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 44"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-44"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 45"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php</span>
                    
                    <span class="font-mono text-xs">:58</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-45"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="58"
                    data-ln-start-from="53"
                >    {
        $request::setTrustedProxies([], $this-&gt;getTrustedHeaderNames());

        $this-&gt;setTrustedProxyIpAddresses($request);

        return $next($request);
    }

    /**
     * Sets the trusted proxies on the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function setTrustedProxyIpAddresses(Request $request)
    {
        $trustedIps = $this-&gt;proxies() ?: config(&#039;trustedproxy.proxies&#039;);
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 46"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-46"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 47"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\InvokeDeferredCallbacks.php</span>
                    
                    <span class="font-mono text-xs">:22</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-47"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="22"
                    data-ln-start-from="17"
                >     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

    /**
     * Invoke the deferred callbacks.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Symfony\Component\HttpFoundation\Response  $response
     * @return void
     */
    public function terminate(Request $request, Response $response)
    {
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 48"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-48"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 49"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Http\Middleware\ValidatePathEncoding.php</span>
                    
                    <span class="font-mono text-xs">:26</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-49"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="26"
                    data-ln-start-from="21"
                >
        if (! mb_check_encoding($decodedPath, &#039;UTF-8&#039;)) {
            throw new MalformedUrlException;
        }

        return $next($request);
    }
}
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 50"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:208</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-50"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="208"
                    data-ln-start-from="203"
                >                        // since the object we&#039;re given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                        ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                        : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, $e);
                }
            };
        };
    }

    /**
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 51"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span>
                    
                    <span class="font-mono text-xs">:126</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-51"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="126"
                    data-ln-start-from="121"
                >        $pipeline = array_reduce(
            array_reverse($this-&gt;pipes()), $this-&gt;carry(), $this-&gt;prepareDestination($destination)
        );

        try {
            return $pipeline($this-&gt;passable);
        } finally {
            if ($this-&gt;finally) {
                ($this-&gt;finally)($this-&gt;passable);
            }
        }
    }

    /**
     * Run the pipeline and return the result.
     *
     * @return mixed
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 52"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php</span>
                    
                    <span class="font-mono text-xs">:175</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-52"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="175"
                    data-ln-start-from="170"
                >        $this-&gt;bootstrap();

        return (new Pipeline($this-&gt;app))
            -&gt;send($request)
            -&gt;through($this-&gt;app-&gt;shouldSkipMiddleware() ? [] : $this-&gt;middleware)
            -&gt;then($this-&gt;dispatchToRouter());
    }

    /**
     * Bootstrap the application for HTTP requests.
     *
     * @return void
     */
    public function bootstrap()
    {
        if (! $this-&gt;app-&gt;hasBeenBootstrapped()) {
            $this-&gt;app-&gt;bootstrapWith($this-&gt;bootstrappers());
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 53"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php</span>
                    
                    <span class="font-mono text-xs">:144</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-53"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="144"
                    data-ln-start-from="139"
                >        $this-&gt;requestStartedAt = Carbon::now();

        try {
            $request-&gt;enableHttpMethodParameterOverride();

            $response = $this-&gt;sendRequestThroughRouter($request);
        } catch (Throwable $e) {
            $this-&gt;reportException($e);

            $response = $this-&gt;renderException($request, $e);
        }

        $this-&gt;app[&#039;events&#039;]-&gt;dispatch(
            new RequestHandled($request, $response)
        );

        return $response;
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 54"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\Application.php</span>
                    
                    <span class="font-mono text-xs">:1219</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-54"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="1219"
                    data-ln-start-from="1214"
                >     */
    public function handleRequest(Request $request)
    {
        $kernel = $this-&gt;make(HttpKernelContract::class);

        $response = $kernel-&gt;handle($request)-&gt;send();

        $kernel-&gt;terminate($request, $response);
    }

    /**
     * Handle the incoming Artisan command.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @return int
     */
    public function handleCommand(InputInterface $input)
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 55"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\public\index.php</span>
                    
                    <span class="font-mono text-xs">:20</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-55"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="20"
                    data-ln-start-from="15"
                >
// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.&#039;/../bootstrap/app.php&#039;;

$app-&gt;handleRequest(Request::capture());
</code></template></pre>
        </div>
    </div>
    <div
        class="sm:col-span-2"
        x-show="index === 56"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                                            <span class="wrap text-gray-900 dark:text-gray-300">D:\User\Program files\Tools\xampp\htdocs\toolshare-system\backend\vendor\laravel\framework\src\Illuminate\Foundation\resources\server.php</span>
                    
                    <span class="font-mono text-xs">:23</span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-56"
                    class="language-php highlightable-code  scrollbar-hidden overflow-y-hidden"
                    data-line-number="23"
                    data-ln-start-from="18"
                >$requestMethod = $_SERVER[&#039;REQUEST_METHOD&#039;];
$remoteAddress = $_SERVER[&#039;REMOTE_ADDR&#039;].&#039;:&#039;.$_SERVER[&#039;REMOTE_PORT&#039;];

file_put_contents(&#039;php://stdout&#039;, &quot;[$formattedDateTime] $remoteAddress [$requestMethod] URI: $uri\n&quot;);

require_once $publicPath.&#039;/index.php&#039;;
</code></template></pre>
        </div>
    </div>
        </div>
    </div>
</section>

                <section
    class="@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl mt-6 overflow-x-auto"
>
    <div>
        <span class="text-xl font-bold lg:text-2xl">Request</span>
    </div>

    <div class="mt-2">
        <span>GET</span>
        <span class="text-gray-500">/</span>
    </div>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white">Headers</span>
    </div>

    <dl class="mt-1 grid grid-cols-1 rounded border dark:border-gray-800">
                    <div class="flex items-center gap-2  dark:border-gray-800">
                <span
                    data-tippy-content="user-agent"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                >
                    user-agent
                </span>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">PostmanRuntime/7.43.4</code></pre>
                </span>
            </div>
                    <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span
                    data-tippy-content="accept"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                >
                    accept
                </span>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">*/*</code></pre>
                </span>
            </div>
                    <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span
                    data-tippy-content="cache-control"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                >
                    cache-control
                </span>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">no-cache</code></pre>
                </span>
            </div>
                    <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span
                    data-tippy-content="postman-token"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                >
                    postman-token
                </span>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">d079b22c-7812-47b6-a355-f83ab28f831b</code></pre>
                </span>
            </div>
                    <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span
                    data-tippy-content="accept-encoding"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                >
                    accept-encoding
                </span>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">gzip, deflate, br</code></pre>
                </span>
            </div>
                    <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span
                    data-tippy-content="connection"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                >
                    connection
                </span>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">keep-alive</code></pre>
                </span>
            </div>
                    <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span
                    data-tippy-content="referer"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                >
                    referer
                </span>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">http://127.0.0.1:8000/api/borrow-requests</code></pre>
                </span>
            </div>
                    <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span
                    data-tippy-content="host"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                >
                    host
                </span>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">127.0.0.1:8000</code></pre>
                </span>
            </div>
            </dl>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white">Body</span>
    </div>

    <div class="mt-1 rounded border dark:border-gray-800">
        <div class="flex items-center">
            <span
                class="min-w-0 flex-grow"
                style="-webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem))"
            >
                <pre class="scrollbar-hidden mx-5 my-3 overflow-y-hidden text-xs lg:text-sm"><code class="overflow-y-hidden scrollbar-hidden overflow-x-scroll scrollbar-hidden-x">No body data</code></pre>
            </span>
        </div>
    </div>
</section>

<section
    class="@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl mt-6 overflow-x-auto"
>
    <div>
        <span class="text-xl font-bold lg:text-2xl">Application</span>
    </div>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white"> Routing </span>
    </div>

    <dl class="mt-1 grid grid-cols-1 rounded border dark:border-gray-800">
                    <div class="flex items-center gap-2  dark:border-gray-800">
                <span
                    data-tippy-content="controller"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                    >controller</span
                >
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">Closure</code></pre>
                </span>
            </div>
                    <div class="flex items-center gap-2 border-t dark:border-gray-800">
                <span
                    data-tippy-content="middleware"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                    >middleware</span
                >
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">web</code></pre>
                </span>
            </div>
            </dl>

    
    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white"> Database Queries </span>
        <span class="text-xs text-gray-500 dark:text-gray-400">
                    </span>
    </div>

    <dl class="mt-1 grid grid-cols-1 rounded border dark:border-gray-800">
                    <div class="flex items-center gap-2  dark:border-gray-800">
                <div class="lg:text-md w-[8rem] flex-none truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    <span>mysql</span>
                    <span class="hidden text-xs text-gray-500 lg:inline-block">(90.69 ms)</span>
                </div>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x">select * from `sessions` where `id` = &#039;S7kF1Hi7oTeTjm58WIkdGWlPJQbS7rTPg0lqRBhU&#039; limit 1</code></pre>
                </span>
            </div>
            </dl>
</section>
            </div>
        </main>
    </div>

    <script>var ce="top",be="bottom",ye="right",ue="left",nr="auto",Bt=[ce,be,ye,ue],dt="start",Dt="end",ua="clippingParents",mi="viewport",Et="popper",la="reference",Pr=Bt.reduce(function(e,t){return e.concat([t+"-"+dt,t+"-"+Dt])},[]),xi=[].concat(Bt,[nr]).reduce(function(e,t){return e.concat([t,t+"-"+dt,t+"-"+Dt])},[]),fa="beforeRead",da="read",pa="afterRead",ha="beforeMain",ga="main",va="afterMain",_a="beforeWrite",ba="write",ya="afterWrite",ma=[fa,da,pa,ha,ga,va,_a,ba,ya];function Me(e){return e?(e.nodeName||"").toLowerCase():null}function fe(e){if(e==null)return window;if(e.toString()!=="[object Window]"){var t=e.ownerDocument;return t&&t.defaultView||window}return e}function it(e){var t=fe(e).Element;return e instanceof t||e instanceof Element}function _e(e){var t=fe(e).HTMLElement;return e instanceof t||e instanceof HTMLElement}function rr(e){if(typeof ShadowRoot>"u")return!1;var t=fe(e).ShadowRoot;return e instanceof t||e instanceof ShadowRoot}function xa(e){var t=e.state;Object.keys(t.elements).forEach(function(n){var r=t.styles[n]||{},i=t.attributes[n]||{},o=t.elements[n];!_e(o)||!Me(o)||(Object.assign(o.style,r),Object.keys(i).forEach(function(a){var s=i[a];s===!1?o.removeAttribute(a):o.setAttribute(a,s===!0?"":s)}))})}function Ea(e){var t=e.state,n={popper:{position:t.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return Object.assign(t.elements.popper.style,n.popper),t.styles=n,t.elements.arrow&&Object.assign(t.elements.arrow.style,n.arrow),function(){Object.keys(t.elements).forEach(function(r){var i=t.elements[r],o=t.attributes[r]||{},a=Object.keys(t.styles.hasOwnProperty(r)?t.styles[r]:n[r]),s=a.reduce(function(c,f){return c[f]="",c},{});!_e(i)||!Me(i)||(Object.assign(i.style,s),Object.keys(o).forEach(function(c){i.removeAttribute(c)}))})}}const Ei={name:"applyStyles",enabled:!0,phase:"write",fn:xa,effect:Ea,requires:["computeStyles"]};function Te(e){return e.split("-")[0]}var Ze=Math.max,rn=Math.min,pt=Math.round;function Pn(){var e=navigator.userAgentData;return e!=null&&e.brands&&Array.isArray(e.brands)?e.brands.map(function(t){return t.brand+"/"+t.version}).join(" "):navigator.userAgent}function wi(){return!/^((?!chrome|android).)*safari/i.test(Pn())}function ht(e,t,n){t===void 0&&(t=!1),n===void 0&&(n=!1);var r=e.getBoundingClientRect(),i=1,o=1;t&&_e(e)&&(i=e.offsetWidth>0&&pt(r.width)/e.offsetWidth||1,o=e.offsetHeight>0&&pt(r.height)/e.offsetHeight||1);var a=it(e)?fe(e):window,s=a.visualViewport,c=!wi()&&n,f=(r.left+(c&&s?s.offsetLeft:0))/i,l=(r.top+(c&&s?s.offsetTop:0))/o,v=r.width/i,b=r.height/o;return{width:v,height:b,top:l,right:f+v,bottom:l+b,left:f,x:f,y:l}}function ir(e){var t=ht(e),n=e.offsetWidth,r=e.offsetHeight;return Math.abs(t.width-n)<=1&&(n=t.width),Math.abs(t.height-r)<=1&&(r=t.height),{x:e.offsetLeft,y:e.offsetTop,width:n,height:r}}function Oi(e,t){var n=t.getRootNode&&t.getRootNode();if(e.contains(t))return!0;if(n&&rr(n)){var r=t;do{if(r&&e.isSameNode(r))return!0;r=r.parentNode||r.host}while(r)}return!1}function De(e){return fe(e).getComputedStyle(e)}function wa(e){return["table","td","th"].indexOf(Me(e))>=0}function We(e){return((it(e)?e.ownerDocument:e.document)||window.document).documentElement}function fn(e){return Me(e)==="html"?e:e.assignedSlot||e.parentNode||(rr(e)?e.host:null)||We(e)}function kr(e){return!_e(e)||De(e).position==="fixed"?null:e.offsetParent}function Oa(e){var t=/firefox/i.test(Pn()),n=/Trident/i.test(Pn());if(n&&_e(e)){var r=De(e);if(r.position==="fixed")return null}var i=fn(e);for(rr(i)&&(i=i.host);_e(i)&&["html","body"].indexOf(Me(i))<0;){var o=De(i);if(o.transform!=="none"||o.perspective!=="none"||o.contain==="paint"||["transform","perspective"].indexOf(o.willChange)!==-1||t&&o.willChange==="filter"||t&&o.filter&&o.filter!=="none")return i;i=i.parentNode}return null}function $t(e){for(var t=fe(e),n=kr(e);n&&wa(n)&&De(n).position==="static";)n=kr(n);return n&&(Me(n)==="html"||Me(n)==="body"&&De(n).position==="static")?t:n||Oa(e)||t}function or(e){return["top","bottom"].indexOf(e)>=0?"x":"y"}function Tt(e,t,n){return Ze(e,rn(t,n))}function Aa(e,t,n){var r=Tt(e,t,n);return r>n?n:r}function Ai(){return{top:0,right:0,bottom:0,left:0}}function Si(e){return Object.assign({},Ai(),e)}function Ti(e,t){return t.reduce(function(n,r){return n[r]=e,n},{})}var Sa=function(t,n){return t=typeof t=="function"?t(Object.assign({},n.rects,{placement:n.placement})):t,Si(typeof t!="number"?t:Ti(t,Bt))};function Ta(e){var t,n=e.state,r=e.name,i=e.options,o=n.elements.arrow,a=n.modifiersData.popperOffsets,s=Te(n.placement),c=or(s),f=[ue,ye].indexOf(s)>=0,l=f?"height":"width";if(!(!o||!a)){var v=Sa(i.padding,n),b=ir(o),_=c==="y"?ce:ue,A=c==="y"?be:ye,S=n.rects.reference[l]+n.rects.reference[c]-a[c]-n.rects.popper[l],h=a[c]-n.rects.reference[c],E=$t(o),O=E?c==="y"?E.clientHeight||0:E.clientWidth||0:0,M=S/2-h/2,u=v[_],I=O-b[l]-v[A],m=O/2-b[l]/2+M,L=Tt(u,m,I),K=c;n.modifiersData[r]=(t={},t[K]=L,t.centerOffset=L-m,t)}}function Ma(e){var t=e.state,n=e.options,r=n.element,i=r===void 0?"[data-popper-arrow]":r;i!=null&&(typeof i=="string"&&(i=t.elements.popper.querySelector(i),!i)||Oi(t.elements.popper,i)&&(t.elements.arrow=i))}const Ca={name:"arrow",enabled:!0,phase:"main",fn:Ta,effect:Ma,requires:["popperOffsets"],requiresIfExists:["preventOverflow"]};function gt(e){return e.split("-")[1]}var Ra={top:"auto",right:"auto",bottom:"auto",left:"auto"};function Ia(e,t){var n=e.x,r=e.y,i=t.devicePixelRatio||1;return{x:pt(n*i)/i||0,y:pt(r*i)/i||0}}function Br(e){var t,n=e.popper,r=e.popperRect,i=e.placement,o=e.variation,a=e.offsets,s=e.position,c=e.gpuAcceleration,f=e.adaptive,l=e.roundOffsets,v=e.isFixed,b=a.x,_=b===void 0?0:b,A=a.y,S=A===void 0?0:A,h=typeof l=="function"?l({x:_,y:S}):{x:_,y:S};_=h.x,S=h.y;var E=a.hasOwnProperty("x"),O=a.hasOwnProperty("y"),M=ue,u=ce,I=window;if(f){var m=$t(n),L="clientHeight",K="clientWidth";if(m===fe(n)&&(m=We(n),De(m).position!=="static"&&s==="absolute"&&(L="scrollHeight",K="scrollWidth")),m=m,i===ce||(i===ue||i===ye)&&o===Dt){u=be;var P=v&&m===I&&I.visualViewport?I.visualViewport.height:m[L];S-=P-r.height,S*=c?1:-1}if(i===ue||(i===ce||i===be)&&o===Dt){M=ye;var H=v&&m===I&&I.visualViewport?I.visualViewport.width:m[K];_-=H-r.width,_*=c?1:-1}}var q=Object.assign({position:s},f&&Ra),z=l===!0?Ia({x:_,y:S},fe(n)):{x:_,y:S};if(_=z.x,S=z.y,c){var k;return Object.assign({},q,(k={},k[u]=O?"0":"",k[M]=E?"0":"",k.transform=(I.devicePixelRatio||1)<=1?"translate("+_+"px, "+S+"px)":"translate3d("+_+"px, "+S+"px, 0)",k))}return Object.assign({},q,(t={},t[u]=O?S+"px":"",t[M]=E?_+"px":"",t.transform="",t))}function Da(e){var t=e.state,n=e.options,r=n.gpuAcceleration,i=r===void 0?!0:r,o=n.adaptive,a=o===void 0?!0:o,s=n.roundOffsets,c=s===void 0?!0:s,f={placement:Te(t.placement),variation:gt(t.placement),popper:t.elements.popper,popperRect:t.rects.popper,gpuAcceleration:i,isFixed:t.options.strategy==="fixed"};t.modifiersData.popperOffsets!=null&&(t.styles.popper=Object.assign({},t.styles.popper,Br(Object.assign({},f,{offsets:t.modifiersData.popperOffsets,position:t.options.strategy,adaptive:a,roundOffsets:c})))),t.modifiersData.arrow!=null&&(t.styles.arrow=Object.assign({},t.styles.arrow,Br(Object.assign({},f,{offsets:t.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:c})))),t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-placement":t.placement})}const Na={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:Da,data:{}};var Vt={passive:!0};function La(e){var t=e.state,n=e.instance,r=e.options,i=r.scroll,o=i===void 0?!0:i,a=r.resize,s=a===void 0?!0:a,c=fe(t.elements.popper),f=[].concat(t.scrollParents.reference,t.scrollParents.popper);return o&&f.forEach(function(l){l.addEventListener("scroll",n.update,Vt)}),s&&c.addEventListener("resize",n.update,Vt),function(){o&&f.forEach(function(l){l.removeEventListener("scroll",n.update,Vt)}),s&&c.removeEventListener("resize",n.update,Vt)}}const Pa={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:La,data:{}};var ka={left:"right",right:"left",bottom:"top",top:"bottom"};function en(e){return e.replace(/left|right|bottom|top/g,function(t){return ka[t]})}var Ba={start:"end",end:"start"};function $r(e){return e.replace(/start|end/g,function(t){return Ba[t]})}function ar(e){var t=fe(e),n=t.pageXOffset,r=t.pageYOffset;return{scrollLeft:n,scrollTop:r}}function sr(e){return ht(We(e)).left+ar(e).scrollLeft}function $a(e,t){var n=fe(e),r=We(e),i=n.visualViewport,o=r.clientWidth,a=r.clientHeight,s=0,c=0;if(i){o=i.width,a=i.height;var f=wi();(f||!f&&t==="fixed")&&(s=i.offsetLeft,c=i.offsetTop)}return{width:o,height:a,x:s+sr(e),y:c}}function ja(e){var t,n=We(e),r=ar(e),i=(t=e.ownerDocument)==null?void 0:t.body,o=Ze(n.scrollWidth,n.clientWidth,i?i.scrollWidth:0,i?i.clientWidth:0),a=Ze(n.scrollHeight,n.clientHeight,i?i.scrollHeight:0,i?i.clientHeight:0),s=-r.scrollLeft+sr(e),c=-r.scrollTop;return De(i||n).direction==="rtl"&&(s+=Ze(n.clientWidth,i?i.clientWidth:0)-o),{width:o,height:a,x:s,y:c}}function cr(e){var t=De(e),n=t.overflow,r=t.overflowX,i=t.overflowY;return/auto|scroll|overlay|hidden/.test(n+i+r)}function Mi(e){return["html","body","#document"].indexOf(Me(e))>=0?e.ownerDocument.body:_e(e)&&cr(e)?e:Mi(fn(e))}function Mt(e,t){var n;t===void 0&&(t=[]);var r=Mi(e),i=r===((n=e.ownerDocument)==null?void 0:n.body),o=fe(r),a=i?[o].concat(o.visualViewport||[],cr(r)?r:[]):r,s=t.concat(a);return i?s:s.concat(Mt(fn(a)))}function kn(e){return Object.assign({},e,{left:e.x,top:e.y,right:e.x+e.width,bottom:e.y+e.height})}function Ha(e,t){var n=ht(e,!1,t==="fixed");return n.top=n.top+e.clientTop,n.left=n.left+e.clientLeft,n.bottom=n.top+e.clientHeight,n.right=n.left+e.clientWidth,n.width=e.clientWidth,n.height=e.clientHeight,n.x=n.left,n.y=n.top,n}function jr(e,t,n){return t===mi?kn($a(e,n)):it(t)?Ha(t,n):kn(ja(We(e)))}function Fa(e){var t=Mt(fn(e)),n=["absolute","fixed"].indexOf(De(e).position)>=0,r=n&&_e(e)?$t(e):e;return it(r)?t.filter(function(i){return it(i)&&Oi(i,r)&&Me(i)!=="body"}):[]}function Ua(e,t,n,r){var i=t==="clippingParents"?Fa(e):[].concat(t),o=[].concat(i,[n]),a=o[0],s=o.reduce(function(c,f){var l=jr(e,f,r);return c.top=Ze(l.top,c.top),c.right=rn(l.right,c.right),c.bottom=rn(l.bottom,c.bottom),c.left=Ze(l.left,c.left),c},jr(e,a,r));return s.width=s.right-s.left,s.height=s.bottom-s.top,s.x=s.left,s.y=s.top,s}function Ci(e){var t=e.reference,n=e.element,r=e.placement,i=r?Te(r):null,o=r?gt(r):null,a=t.x+t.width/2-n.width/2,s=t.y+t.height/2-n.height/2,c;switch(i){case ce:c={x:a,y:t.y-n.height};break;case be:c={x:a,y:t.y+t.height};break;case ye:c={x:t.x+t.width,y:s};break;case ue:c={x:t.x-n.width,y:s};break;default:c={x:t.x,y:t.y}}var f=i?or(i):null;if(f!=null){var l=f==="y"?"height":"width";switch(o){case dt:c[f]=c[f]-(t[l]/2-n[l]/2);break;case Dt:c[f]=c[f]+(t[l]/2-n[l]/2);break}}return c}function Nt(e,t){t===void 0&&(t={});var n=t,r=n.placement,i=r===void 0?e.placement:r,o=n.strategy,a=o===void 0?e.strategy:o,s=n.boundary,c=s===void 0?ua:s,f=n.rootBoundary,l=f===void 0?mi:f,v=n.elementContext,b=v===void 0?Et:v,_=n.altBoundary,A=_===void 0?!1:_,S=n.padding,h=S===void 0?0:S,E=Si(typeof h!="number"?h:Ti(h,Bt)),O=b===Et?la:Et,M=e.rects.popper,u=e.elements[A?O:b],I=Ua(it(u)?u:u.contextElement||We(e.elements.popper),c,l,a),m=ht(e.elements.reference),L=Ci({reference:m,element:M,strategy:"absolute",placement:i}),K=kn(Object.assign({},M,L)),P=b===Et?K:m,H={top:I.top-P.top+E.top,bottom:P.bottom-I.bottom+E.bottom,left:I.left-P.left+E.left,right:P.right-I.right+E.right},q=e.modifiersData.offset;if(b===Et&&q){var z=q[i];Object.keys(H).forEach(function(k){var U=[ye,be].indexOf(k)>=0?1:-1,Y=[ce,be].indexOf(k)>=0?"y":"x";H[k]+=z[Y]*U})}return H}function Wa(e,t){t===void 0&&(t={});var n=t,r=n.placement,i=n.boundary,o=n.rootBoundary,a=n.padding,s=n.flipVariations,c=n.allowedAutoPlacements,f=c===void 0?xi:c,l=gt(r),v=l?s?Pr:Pr.filter(function(A){return gt(A)===l}):Bt,b=v.filter(function(A){return f.indexOf(A)>=0});b.length===0&&(b=v);var _=b.reduce(function(A,S){return A[S]=Nt(e,{placement:S,boundary:i,rootBoundary:o,padding:a})[Te(S)],A},{});return Object.keys(_).sort(function(A,S){return _[A]-_[S]})}function Ka(e){if(Te(e)===nr)return[];var t=en(e);return[$r(e),t,$r(t)]}function za(e){var t=e.state,n=e.options,r=e.name;if(!t.modifiersData[r]._skip){for(var i=n.mainAxis,o=i===void 0?!0:i,a=n.altAxis,s=a===void 0?!0:a,c=n.fallbackPlacements,f=n.padding,l=n.boundary,v=n.rootBoundary,b=n.altBoundary,_=n.flipVariations,A=_===void 0?!0:_,S=n.allowedAutoPlacements,h=t.options.placement,E=Te(h),O=E===h,M=c||(O||!A?[en(h)]:Ka(h)),u=[h].concat(M).reduce(function(se,G){return se.concat(Te(G)===nr?Wa(t,{placement:G,boundary:l,rootBoundary:v,padding:f,flipVariations:A,allowedAutoPlacements:S}):G)},[]),I=t.rects.reference,m=t.rects.popper,L=new Map,K=!0,P=u[0],H=0;H<u.length;H++){var q=u[H],z=Te(q),k=gt(q)===dt,U=[ce,be].indexOf(z)>=0,Y=U?"width":"height",te=Nt(t,{placement:q,boundary:l,rootBoundary:v,altBoundary:b,padding:f}),p=U?k?ye:ue:k?be:ce;I[Y]>m[Y]&&(p=en(p));var y=en(p),C=[];if(o&&C.push(te[z]<=0),s&&C.push(te[p]<=0,te[y]<=0),C.every(function(se){return se})){P=q,K=!1;break}L.set(q,C)}if(K)for(var N=A?3:1,W=function(G){var Z=u.find(function(Ce){var de=L.get(Ce);if(de)return de.slice(0,G).every(function(Re){return Re})});if(Z)return P=Z,"break"},J=N;J>0;J--){var re=W(J);if(re==="break")break}t.placement!==P&&(t.modifiersData[r]._skip=!0,t.placement=P,t.reset=!0)}}const Va={name:"flip",enabled:!0,phase:"main",fn:za,requiresIfExists:["offset"],data:{_skip:!1}};function Hr(e,t,n){return n===void 0&&(n={x:0,y:0}),{top:e.top-t.height-n.y,right:e.right-t.width+n.x,bottom:e.bottom-t.height+n.y,left:e.left-t.width-n.x}}function Fr(e){return[ce,ye,be,ue].some(function(t){return e[t]>=0})}function qa(e){var t=e.state,n=e.name,r=t.rects.reference,i=t.rects.popper,o=t.modifiersData.preventOverflow,a=Nt(t,{elementContext:"reference"}),s=Nt(t,{altBoundary:!0}),c=Hr(a,r),f=Hr(s,i,o),l=Fr(c),v=Fr(f);t.modifiersData[n]={referenceClippingOffsets:c,popperEscapeOffsets:f,isReferenceHidden:l,hasPopperEscaped:v},t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-reference-hidden":l,"data-popper-escaped":v})}const Ga={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:qa};function Xa(e,t,n){var r=Te(e),i=[ue,ce].indexOf(r)>=0?-1:1,o=typeof n=="function"?n(Object.assign({},t,{placement:e})):n,a=o[0],s=o[1];return a=a||0,s=(s||0)*i,[ue,ye].indexOf(r)>=0?{x:s,y:a}:{x:a,y:s}}function Ya(e){var t=e.state,n=e.options,r=e.name,i=n.offset,o=i===void 0?[0,0]:i,a=xi.reduce(function(l,v){return l[v]=Xa(v,t.rects,o),l},{}),s=a[t.placement],c=s.x,f=s.y;t.modifiersData.popperOffsets!=null&&(t.modifiersData.popperOffsets.x+=c,t.modifiersData.popperOffsets.y+=f),t.modifiersData[r]=a}const Ja={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:Ya};function Za(e){var t=e.state,n=e.name;t.modifiersData[n]=Ci({reference:t.rects.reference,element:t.rects.popper,strategy:"absolute",placement:t.placement})}const Qa={name:"popperOffsets",enabled:!0,phase:"read",fn:Za,data:{}};function es(e){return e==="x"?"y":"x"}function ts(e){var t=e.state,n=e.options,r=e.name,i=n.mainAxis,o=i===void 0?!0:i,a=n.altAxis,s=a===void 0?!1:a,c=n.boundary,f=n.rootBoundary,l=n.altBoundary,v=n.padding,b=n.tether,_=b===void 0?!0:b,A=n.tetherOffset,S=A===void 0?0:A,h=Nt(t,{boundary:c,rootBoundary:f,padding:v,altBoundary:l}),E=Te(t.placement),O=gt(t.placement),M=!O,u=or(E),I=es(u),m=t.modifiersData.popperOffsets,L=t.rects.reference,K=t.rects.popper,P=typeof S=="function"?S(Object.assign({},t.rects,{placement:t.placement})):S,H=typeof P=="number"?{mainAxis:P,altAxis:P}:Object.assign({mainAxis:0,altAxis:0},P),q=t.modifiersData.offset?t.modifiersData.offset[t.placement]:null,z={x:0,y:0};if(m){if(o){var k,U=u==="y"?ce:ue,Y=u==="y"?be:ye,te=u==="y"?"height":"width",p=m[u],y=p+h[U],C=p-h[Y],N=_?-K[te]/2:0,W=O===dt?L[te]:K[te],J=O===dt?-K[te]:-L[te],re=t.elements.arrow,se=_&&re?ir(re):{width:0,height:0},G=t.modifiersData["arrow#persistent"]?t.modifiersData["arrow#persistent"].padding:Ai(),Z=G[U],Ce=G[Y],de=Tt(0,L[te],se[te]),Re=M?L[te]/2-N-de-Z-H.mainAxis:W-de-Z-H.mainAxis,Oe=M?-L[te]/2+N+de+Ce+H.mainAxis:J+de+Ce+H.mainAxis,Le=t.elements.arrow&&$t(t.elements.arrow),st=Le?u==="y"?Le.clientTop||0:Le.clientLeft||0:0,ze=(k=q==null?void 0:q[u])!=null?k:0,Ie=p+Re-ze-st,Ve=p+Oe-ze,ie=Tt(_?rn(y,Ie):y,p,_?Ze(C,Ve):C);m[u]=ie,z[u]=ie-p}if(s){var qe,Pe=u==="x"?ce:ue,T=u==="x"?be:ye,pe=m[I],V=I==="y"?"height":"width",$=pe+h[Pe],he=pe-h[T],le=[ce,ue].indexOf(E)!==-1,ke=(qe=q==null?void 0:q[I])!=null?qe:0,Be=le?$:pe-L[V]-K[V]-ke+H.altAxis,g=le?pe+L[V]+K[V]-ke-H.altAxis:he,x=_&&le?Aa(Be,pe,g):Tt(_?Be:$,pe,_?g:he);m[I]=x,z[I]=x-pe}t.modifiersData[r]=z}}const ns={name:"preventOverflow",enabled:!0,phase:"main",fn:ts,requiresIfExists:["offset"]};function rs(e){return{scrollLeft:e.scrollLeft,scrollTop:e.scrollTop}}function is(e){return e===fe(e)||!_e(e)?ar(e):rs(e)}function os(e){var t=e.getBoundingClientRect(),n=pt(t.width)/e.offsetWidth||1,r=pt(t.height)/e.offsetHeight||1;return n!==1||r!==1}function as(e,t,n){n===void 0&&(n=!1);var r=_e(t),i=_e(t)&&os(t),o=We(t),a=ht(e,i,n),s={scrollLeft:0,scrollTop:0},c={x:0,y:0};return(r||!r&&!n)&&((Me(t)!=="body"||cr(o))&&(s=is(t)),_e(t)?(c=ht(t,!0),c.x+=t.clientLeft,c.y+=t.clientTop):o&&(c.x=sr(o))),{x:a.left+s.scrollLeft-c.x,y:a.top+s.scrollTop-c.y,width:a.width,height:a.height}}function ss(e){var t=new Map,n=new Set,r=[];e.forEach(function(o){t.set(o.name,o)});function i(o){n.add(o.name);var a=[].concat(o.requires||[],o.requiresIfExists||[]);a.forEach(function(s){if(!n.has(s)){var c=t.get(s);c&&i(c)}}),r.push(o)}return e.forEach(function(o){n.has(o.name)||i(o)}),r}function cs(e){var t=ss(e);return ma.reduce(function(n,r){return n.concat(t.filter(function(i){return i.phase===r}))},[])}function us(e){var t;return function(){return t||(t=new Promise(function(n){Promise.resolve().then(function(){t=void 0,n(e())})})),t}}function ls(e){var t=e.reduce(function(n,r){var i=n[r.name];return n[r.name]=i?Object.assign({},i,r,{options:Object.assign({},i.options,r.options),data:Object.assign({},i.data,r.data)}):r,n},{});return Object.keys(t).map(function(n){return t[n]})}var Ur={placement:"bottom",modifiers:[],strategy:"absolute"};function Wr(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n];return!t.some(function(r){return!(r&&typeof r.getBoundingClientRect=="function")})}function fs(e){e===void 0&&(e={});var t=e,n=t.defaultModifiers,r=n===void 0?[]:n,i=t.defaultOptions,o=i===void 0?Ur:i;return function(s,c,f){f===void 0&&(f=o);var l={placement:"bottom",orderedModifiers:[],options:Object.assign({},Ur,o),modifiersData:{},elements:{reference:s,popper:c},attributes:{},styles:{}},v=[],b=!1,_={state:l,setOptions:function(E){var O=typeof E=="function"?E(l.options):E;S(),l.options=Object.assign({},o,l.options,O),l.scrollParents={reference:it(s)?Mt(s):s.contextElement?Mt(s.contextElement):[],popper:Mt(c)};var M=cs(ls([].concat(r,l.options.modifiers)));return l.orderedModifiers=M.filter(function(u){return u.enabled}),A(),_.update()},forceUpdate:function(){if(!b){var E=l.elements,O=E.reference,M=E.popper;if(Wr(O,M)){l.rects={reference:as(O,$t(M),l.options.strategy==="fixed"),popper:ir(M)},l.reset=!1,l.placement=l.options.placement,l.orderedModifiers.forEach(function(H){return l.modifiersData[H.name]=Object.assign({},H.data)});for(var u=0;u<l.orderedModifiers.length;u++){if(l.reset===!0){l.reset=!1,u=-1;continue}var I=l.orderedModifiers[u],m=I.fn,L=I.options,K=L===void 0?{}:L,P=I.name;typeof m=="function"&&(l=m({state:l,options:K,name:P,instance:_})||l)}}}},update:us(function(){return new Promise(function(h){_.forceUpdate(),h(l)})}),destroy:function(){S(),b=!0}};if(!Wr(s,c))return _;_.setOptions(f).then(function(h){!b&&f.onFirstUpdate&&f.onFirstUpdate(h)});function A(){l.orderedModifiers.forEach(function(h){var E=h.name,O=h.options,M=O===void 0?{}:O,u=h.effect;if(typeof u=="function"){var I=u({state:l,name:E,instance:_,options:M}),m=function(){};v.push(I||m)}})}function S(){v.forEach(function(h){return h()}),v=[]}return _}}var ds=[Pa,Qa,Na,Ei,Ja,Va,ns,Ca,Ga],ps=fs({defaultModifiers:ds}),hs="tippy-box",Ri="tippy-content",gs="tippy-backdrop",Ii="tippy-arrow",Di="tippy-svg-arrow",Xe={passive:!0,capture:!0},Ni=function(){return document.body};function An(e,t,n){if(Array.isArray(e)){var r=e[t];return r??(Array.isArray(n)?n[t]:n)}return e}function ur(e,t){var n={}.toString.call(e);return n.indexOf("[object")===0&&n.indexOf(t+"]")>-1}function Li(e,t){return typeof e=="function"?e.apply(void 0,t):e}function Kr(e,t){if(t===0)return e;var n;return function(r){clearTimeout(n),n=setTimeout(function(){e(r)},t)}}function vs(e){return e.split(/\s+/).filter(Boolean)}function ft(e){return[].concat(e)}function zr(e,t){e.indexOf(t)===-1&&e.push(t)}function _s(e){return e.filter(function(t,n){return e.indexOf(t)===n})}function bs(e){return e.split("-")[0]}function on(e){return[].slice.call(e)}function Vr(e){return Object.keys(e).reduce(function(t,n){return e[n]!==void 0&&(t[n]=e[n]),t},{})}function Ct(){return document.createElement("div")}function dn(e){return["Element","Fragment"].some(function(t){return ur(e,t)})}function ys(e){return ur(e,"NodeList")}function ms(e){return ur(e,"MouseEvent")}function xs(e){return!!(e&&e._tippy&&e._tippy.reference===e)}function Es(e){return dn(e)?[e]:ys(e)?on(e):Array.isArray(e)?e:on(document.querySelectorAll(e))}function Sn(e,t){e.forEach(function(n){n&&(n.style.transitionDuration=t+"ms")})}function qr(e,t){e.forEach(function(n){n&&n.setAttribute("data-state",t)})}function ws(e){var t,n=ft(e),r=n[0];return r!=null&&(t=r.ownerDocument)!=null&&t.body?r.ownerDocument:document}function Os(e,t){var n=t.clientX,r=t.clientY;return e.every(function(i){var o=i.popperRect,a=i.popperState,s=i.props,c=s.interactiveBorder,f=bs(a.placement),l=a.modifiersData.offset;if(!l)return!0;var v=f==="bottom"?l.top.y:0,b=f==="top"?l.bottom.y:0,_=f==="right"?l.left.x:0,A=f==="left"?l.right.x:0,S=o.top-r+v>c,h=r-o.bottom-b>c,E=o.left-n+_>c,O=n-o.right-A>c;return S||h||E||O})}function Tn(e,t,n){var r=t+"EventListener";["transitionend","webkitTransitionEnd"].forEach(function(i){e[r](i,n)})}function Gr(e,t){for(var n=t;n;){var r;if(e.contains(n))return!0;n=n.getRootNode==null||(r=n.getRootNode())==null?void 0:r.host}return!1}var Se={isTouch:!1},Xr=0;function As(){Se.isTouch||(Se.isTouch=!0,window.performance&&document.addEventListener("mousemove",Pi))}function Pi(){var e=performance.now();e-Xr<20&&(Se.isTouch=!1,document.removeEventListener("mousemove",Pi)),Xr=e}function Ss(){var e=document.activeElement;if(xs(e)){var t=e._tippy;e.blur&&!t.state.isVisible&&e.blur()}}function Ts(){document.addEventListener("touchstart",As,Xe),window.addEventListener("blur",Ss)}var Ms=typeof window<"u"&&typeof document<"u",Cs=Ms?!!window.msCrypto:!1,Rs={animateFill:!1,followCursor:!1,inlinePositioning:!1,sticky:!1},Is={allowHTML:!1,animation:"fade",arrow:!0,content:"",inertia:!1,maxWidth:350,role:"tooltip",theme:"",zIndex:9999},xe=Object.assign({appendTo:Ni,aria:{content:"auto",expanded:"auto"},delay:0,duration:[300,250],getReferenceClientRect:null,hideOnClick:!0,ignoreAttributes:!1,interactive:!1,interactiveBorder:2,interactiveDebounce:0,moveTransition:"",offset:[0,10],onAfterUpdate:function(){},onBeforeUpdate:function(){},onCreate:function(){},onDestroy:function(){},onHidden:function(){},onHide:function(){},onMount:function(){},onShow:function(){},onShown:function(){},onTrigger:function(){},onUntrigger:function(){},onClickOutside:function(){},placement:"top",plugins:[],popperOptions:{},render:null,showOnCreate:!1,touch:!0,trigger:"mouseenter focus",triggerTarget:null},Rs,Is),Ds=Object.keys(xe),Ns=function(t){var n=Object.keys(t);n.forEach(function(r){xe[r]=t[r]})};function ki(e){var t=e.plugins||[],n=t.reduce(function(r,i){var o=i.name,a=i.defaultValue;if(o){var s;r[o]=e[o]!==void 0?e[o]:(s=xe[o])!=null?s:a}return r},{});return Object.assign({},e,n)}function Ls(e,t){var n=t?Object.keys(ki(Object.assign({},xe,{plugins:t}))):Ds,r=n.reduce(function(i,o){var a=(e.getAttribute("data-tippy-"+o)||"").trim();if(!a)return i;if(o==="content")i[o]=a;else try{i[o]=JSON.parse(a)}catch{i[o]=a}return i},{});return r}function Yr(e,t){var n=Object.assign({},t,{content:Li(t.content,[e])},t.ignoreAttributes?{}:Ls(e,t.plugins));return n.aria=Object.assign({},xe.aria,n.aria),n.aria={expanded:n.aria.expanded==="auto"?t.interactive:n.aria.expanded,content:n.aria.content==="auto"?t.interactive?null:"describedby":n.aria.content},n}var Ps=function(){return"innerHTML"};function Bn(e,t){e[Ps()]=t}function Jr(e){var t=Ct();return e===!0?t.className=Ii:(t.className=Di,dn(e)?t.appendChild(e):Bn(t,e)),t}function Zr(e,t){dn(t.content)?(Bn(e,""),e.appendChild(t.content)):typeof t.content!="function"&&(t.allowHTML?Bn(e,t.content):e.textContent=t.content)}function $n(e){var t=e.firstElementChild,n=on(t.children);return{box:t,content:n.find(function(r){return r.classList.contains(Ri)}),arrow:n.find(function(r){return r.classList.contains(Ii)||r.classList.contains(Di)}),backdrop:n.find(function(r){return r.classList.contains(gs)})}}function Bi(e){var t=Ct(),n=Ct();n.className=hs,n.setAttribute("data-state","hidden"),n.setAttribute("tabindex","-1");var r=Ct();r.className=Ri,r.setAttribute("data-state","hidden"),Zr(r,e.props),t.appendChild(n),n.appendChild(r),i(e.props,e.props);function i(o,a){var s=$n(t),c=s.box,f=s.content,l=s.arrow;a.theme?c.setAttribute("data-theme",a.theme):c.removeAttribute("data-theme"),typeof a.animation=="string"?c.setAttribute("data-animation",a.animation):c.removeAttribute("data-animation"),a.inertia?c.setAttribute("data-inertia",""):c.removeAttribute("data-inertia"),c.style.maxWidth=typeof a.maxWidth=="number"?a.maxWidth+"px":a.maxWidth,a.role?c.setAttribute("role",a.role):c.removeAttribute("role"),(o.content!==a.content||o.allowHTML!==a.allowHTML)&&Zr(f,e.props),a.arrow?l?o.arrow!==a.arrow&&(c.removeChild(l),c.appendChild(Jr(a.arrow))):c.appendChild(Jr(a.arrow)):l&&c.removeChild(l)}return{popper:t,onUpdate:i}}Bi.$$tippy=!0;var ks=1,qt=[],Mn=[];function Bs(e,t){var n=Yr(e,Object.assign({},xe,ki(Vr(t)))),r,i,o,a=!1,s=!1,c=!1,f=!1,l,v,b,_=[],A=Kr(Ie,n.interactiveDebounce),S,h=ks++,E=null,O=_s(n.plugins),M={isEnabled:!0,isVisible:!1,isDestroyed:!1,isMounted:!1,isShown:!1},u={id:h,reference:e,popper:Ct(),popperInstance:E,props:n,state:M,plugins:O,clearDelayTimeouts:Be,setProps:g,setContent:x,show:D,hide:j,hideWithInteractivity:ne,enable:le,disable:ke,unmount:me,destroy:En};if(!n.render)return u;var I=n.render(u),m=I.popper,L=I.onUpdate;m.setAttribute("data-tippy-root",""),m.id="tippy-"+u.id,u.popper=m,e._tippy=u,m._tippy=u;var K=O.map(function(d){return d.fn(u)}),P=e.hasAttribute("aria-expanded");return Le(),N(),p(),y("onCreate",[u]),n.showOnCreate&&$(),m.addEventListener("mouseenter",function(){u.props.interactive&&u.state.isVisible&&u.clearDelayTimeouts()}),m.addEventListener("mouseleave",function(){u.props.interactive&&u.props.trigger.indexOf("mouseenter")>=0&&U().addEventListener("mousemove",A)}),u;function H(){var d=u.props.touch;return Array.isArray(d)?d:[d,0]}function q(){return H()[0]==="hold"}function z(){var d;return!!((d=u.props.render)!=null&&d.$$tippy)}function k(){return S||e}function U(){var d=k().parentNode;return d?ws(d):document}function Y(){return $n(m)}function te(d){return u.state.isMounted&&!u.state.isVisible||Se.isTouch||l&&l.type==="focus"?0:An(u.props.delay,d?0:1,xe.delay)}function p(d){d===void 0&&(d=!1),m.style.pointerEvents=u.props.interactive&&!d?"":"none",m.style.zIndex=""+u.props.zIndex}function y(d,w,R){if(R===void 0&&(R=!0),K.forEach(function(B){B[d]&&B[d].apply(B,w)}),R){var F;(F=u.props)[d].apply(F,w)}}function C(){var d=u.props.aria;if(d.content){var w="aria-"+d.content,R=m.id,F=ft(u.props.triggerTarget||e);F.forEach(function(B){var oe=B.getAttribute(w);if(u.state.isVisible)B.setAttribute(w,oe?oe+" "+R:R);else{var ge=oe&&oe.replace(R,"").trim();ge?B.setAttribute(w,ge):B.removeAttribute(w)}})}}function N(){if(!(P||!u.props.aria.expanded)){var d=ft(u.props.triggerTarget||e);d.forEach(function(w){u.props.interactive?w.setAttribute("aria-expanded",u.state.isVisible&&w===k()?"true":"false"):w.removeAttribute("aria-expanded")})}}function W(){U().removeEventListener("mousemove",A),qt=qt.filter(function(d){return d!==A})}function J(d){if(!(Se.isTouch&&(c||d.type==="mousedown"))){var w=d.composedPath&&d.composedPath()[0]||d.target;if(!(u.props.interactive&&Gr(m,w))){if(ft(u.props.triggerTarget||e).some(function(R){return Gr(R,w)})){if(Se.isTouch||u.state.isVisible&&u.props.trigger.indexOf("click")>=0)return}else y("onClickOutside",[u,d]);u.props.hideOnClick===!0&&(u.clearDelayTimeouts(),u.hide(),s=!0,setTimeout(function(){s=!1}),u.state.isMounted||Z())}}}function re(){c=!0}function se(){c=!1}function G(){var d=U();d.addEventListener("mousedown",J,!0),d.addEventListener("touchend",J,Xe),d.addEventListener("touchstart",se,Xe),d.addEventListener("touchmove",re,Xe)}function Z(){var d=U();d.removeEventListener("mousedown",J,!0),d.removeEventListener("touchend",J,Xe),d.removeEventListener("touchstart",se,Xe),d.removeEventListener("touchmove",re,Xe)}function Ce(d,w){Re(d,function(){!u.state.isVisible&&m.parentNode&&m.parentNode.contains(m)&&w()})}function de(d,w){Re(d,w)}function Re(d,w){var R=Y().box;function F(B){B.target===R&&(Tn(R,"remove",F),w())}if(d===0)return w();Tn(R,"remove",v),Tn(R,"add",F),v=F}function Oe(d,w,R){R===void 0&&(R=!1);var F=ft(u.props.triggerTarget||e);F.forEach(function(B){B.addEventListener(d,w,R),_.push({node:B,eventType:d,handler:w,options:R})})}function Le(){q()&&(Oe("touchstart",ze,{passive:!0}),Oe("touchend",Ve,{passive:!0})),vs(u.props.trigger).forEach(function(d){if(d!=="manual")switch(Oe(d,ze),d){case"mouseenter":Oe("mouseleave",Ve);break;case"focus":Oe(Cs?"focusout":"blur",ie);break;case"focusin":Oe("focusout",ie);break}})}function st(){_.forEach(function(d){var w=d.node,R=d.eventType,F=d.handler,B=d.options;w.removeEventListener(R,F,B)}),_=[]}function ze(d){var w,R=!1;if(!(!u.state.isEnabled||qe(d)||s)){var F=((w=l)==null?void 0:w.type)==="focus";l=d,S=d.currentTarget,N(),!u.state.isVisible&&ms(d)&&qt.forEach(function(B){return B(d)}),d.type==="click"&&(u.props.trigger.indexOf("mouseenter")<0||a)&&u.props.hideOnClick!==!1&&u.state.isVisible?R=!0:$(d),d.type==="click"&&(a=!R),R&&!F&&he(d)}}function Ie(d){var w=d.target,R=k().contains(w)||m.contains(w);if(!(d.type==="mousemove"&&R)){var F=V().concat(m).map(function(B){var oe,ge=B._tippy,ct=(oe=ge.popperInstance)==null?void 0:oe.state;return ct?{popperRect:B.getBoundingClientRect(),popperState:ct,props:n}:null}).filter(Boolean);Os(F,d)&&(W(),he(d))}}function Ve(d){var w=qe(d)||u.props.trigger.indexOf("click")>=0&&a;if(!w){if(u.props.interactive){u.hideWithInteractivity(d);return}he(d)}}function ie(d){u.props.trigger.indexOf("focusin")<0&&d.target!==k()||u.props.interactive&&d.relatedTarget&&m.contains(d.relatedTarget)||he(d)}function qe(d){return Se.isTouch?q()!==d.type.indexOf("touch")>=0:!1}function Pe(){T();var d=u.props,w=d.popperOptions,R=d.placement,F=d.offset,B=d.getReferenceClientRect,oe=d.moveTransition,ge=z()?$n(m).arrow:null,ct=B?{getBoundingClientRect:B,contextElement:B.contextElement||k()}:e,Lr={name:"$$tippy",enabled:!0,phase:"beforeWrite",requires:["computeStyles"],fn:function(Kt){var ut=Kt.state;if(z()){var ca=Y(),On=ca.box;["placement","reference-hidden","escaped"].forEach(function(zt){zt==="placement"?On.setAttribute("data-placement",ut.placement):ut.attributes.popper["data-popper-"+zt]?On.setAttribute("data-"+zt,""):On.removeAttribute("data-"+zt)}),ut.attributes.popper={}}}},Ge=[{name:"offset",options:{offset:F}},{name:"preventOverflow",options:{padding:{top:2,bottom:2,left:5,right:5}}},{name:"flip",options:{padding:5}},{name:"computeStyles",options:{adaptive:!oe}},Lr];z()&&ge&&Ge.push({name:"arrow",options:{element:ge,padding:3}}),Ge.push.apply(Ge,(w==null?void 0:w.modifiers)||[]),u.popperInstance=ps(ct,m,Object.assign({},w,{placement:R,onFirstUpdate:b,modifiers:Ge}))}function T(){u.popperInstance&&(u.popperInstance.destroy(),u.popperInstance=null)}function pe(){var d=u.props.appendTo,w,R=k();u.props.interactive&&d===Ni||d==="parent"?w=R.parentNode:w=Li(d,[R]),w.contains(m)||w.appendChild(m),u.state.isMounted=!0,Pe()}function V(){return on(m.querySelectorAll("[data-tippy-root]"))}function $(d){u.clearDelayTimeouts(),d&&y("onTrigger",[u,d]),G();var w=te(!0),R=H(),F=R[0],B=R[1];Se.isTouch&&F==="hold"&&B&&(w=B),w?r=setTimeout(function(){u.show()},w):u.show()}function he(d){if(u.clearDelayTimeouts(),y("onUntrigger",[u,d]),!u.state.isVisible){Z();return}if(!(u.props.trigger.indexOf("mouseenter")>=0&&u.props.trigger.indexOf("click")>=0&&["mouseleave","mousemove"].indexOf(d.type)>=0&&a)){var w=te(!1);w?i=setTimeout(function(){u.state.isVisible&&u.hide()},w):o=requestAnimationFrame(function(){u.hide()})}}function le(){u.state.isEnabled=!0}function ke(){u.hide(),u.state.isEnabled=!1}function Be(){clearTimeout(r),clearTimeout(i),cancelAnimationFrame(o)}function g(d){if(!u.state.isDestroyed){y("onBeforeUpdate",[u,d]),st();var w=u.props,R=Yr(e,Object.assign({},w,Vr(d),{ignoreAttributes:!0}));u.props=R,Le(),w.interactiveDebounce!==R.interactiveDebounce&&(W(),A=Kr(Ie,R.interactiveDebounce)),w.triggerTarget&&!R.triggerTarget?ft(w.triggerTarget).forEach(function(F){F.removeAttribute("aria-expanded")}):R.triggerTarget&&e.removeAttribute("aria-expanded"),N(),p(),L&&L(w,R),u.popperInstance&&(Pe(),V().forEach(function(F){requestAnimationFrame(F._tippy.popperInstance.forceUpdate)})),y("onAfterUpdate",[u,d])}}function x(d){u.setProps({content:d})}function D(){var d=u.state.isVisible,w=u.state.isDestroyed,R=!u.state.isEnabled,F=Se.isTouch&&!u.props.touch,B=An(u.props.duration,0,xe.duration);if(!(d||w||R||F)&&!k().hasAttribute("disabled")&&(y("onShow",[u],!1),u.props.onShow(u)!==!1)){if(u.state.isVisible=!0,z()&&(m.style.visibility="visible"),p(),G(),u.state.isMounted||(m.style.transition="none"),z()){var oe=Y(),ge=oe.box,ct=oe.content;Sn([ge,ct],0)}b=function(){var Ge;if(!(!u.state.isVisible||f)){if(f=!0,m.offsetHeight,m.style.transition=u.props.moveTransition,z()&&u.props.animation){var wn=Y(),Kt=wn.box,ut=wn.content;Sn([Kt,ut],B),qr([Kt,ut],"visible")}C(),N(),zr(Mn,u),(Ge=u.popperInstance)==null||Ge.forceUpdate(),y("onMount",[u]),u.props.animation&&z()&&de(B,function(){u.state.isShown=!0,y("onShown",[u])})}},pe()}}function j(){var d=!u.state.isVisible,w=u.state.isDestroyed,R=!u.state.isEnabled,F=An(u.props.duration,1,xe.duration);if(!(d||w||R)&&(y("onHide",[u],!1),u.props.onHide(u)!==!1)){if(u.state.isVisible=!1,u.state.isShown=!1,f=!1,a=!1,z()&&(m.style.visibility="hidden"),W(),Z(),p(!0),z()){var B=Y(),oe=B.box,ge=B.content;u.props.animation&&(Sn([oe,ge],F),qr([oe,ge],"hidden"))}C(),N(),u.props.animation?z()&&Ce(F,u.unmount):u.unmount()}}function ne(d){U().addEventListener("mousemove",A),zr(qt,A),A(d)}function me(){u.state.isVisible&&u.hide(),u.state.isMounted&&(T(),V().forEach(function(d){d._tippy.unmount()}),m.parentNode&&m.parentNode.removeChild(m),Mn=Mn.filter(function(d){return d!==u}),u.state.isMounted=!1,y("onHidden",[u]))}function En(){u.state.isDestroyed||(u.clearDelayTimeouts(),u.unmount(),st(),delete e._tippy,u.state.isDestroyed=!0,y("onDestroy",[u]))}}function jt(e,t){t===void 0&&(t={});var n=xe.plugins.concat(t.plugins||[]);Ts();var r=Object.assign({},t,{plugins:n}),i=Es(e),o=i.reduce(function(a,s){var c=s&&Bs(s,r);return c&&a.push(c),a},[]);return dn(e)?o[0]:o}jt.defaultProps=xe;jt.setDefaultProps=Ns;jt.currentInput=Se;Object.assign({},Ei,{effect:function(t){var n=t.state,r={popper:{position:n.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};Object.assign(n.elements.popper.style,r.popper),n.styles=r,n.elements.arrow&&Object.assign(n.elements.arrow.style,r.arrow)}});jt.setDefaultProps({render:Bi});var jn=!1,Hn=!1,Qe=[],Fn=-1;function $s(e){js(e)}function js(e){Qe.includes(e)||Qe.push(e),Hs()}function $i(e){let t=Qe.indexOf(e);t!==-1&&t>Fn&&Qe.splice(t,1)}function Hs(){!Hn&&!jn&&(jn=!0,queueMicrotask(Fs))}function Fs(){jn=!1,Hn=!0;for(let e=0;e<Qe.length;e++)Qe[e](),Fn=e;Qe.length=0,Fn=-1,Hn=!1}var yt,ot,mt,ji,Un=!0;function Us(e){Un=!1,e(),Un=!0}function Ws(e){yt=e.reactive,mt=e.release,ot=t=>e.effect(t,{scheduler:n=>{Un?$s(n):n()}}),ji=e.raw}function Qr(e){ot=e}function Ks(e){let t=()=>{};return[r=>{let i=ot(r);return e._x_effects||(e._x_effects=new Set,e._x_runEffects=()=>{e._x_effects.forEach(o=>o())}),e._x_effects.add(i),t=()=>{i!==void 0&&(e._x_effects.delete(i),mt(i))},i},()=>{t()}]}function Hi(e,t){let n=!0,r,i=ot(()=>{let o=e();JSON.stringify(o),n?r=o:queueMicrotask(()=>{t(o,r),r=o}),n=!1});return()=>mt(i)}var Fi=[],Ui=[],Wi=[];function zs(e){Wi.push(e)}function lr(e,t){typeof t=="function"?(e._x_cleanups||(e._x_cleanups=[]),e._x_cleanups.push(t)):(t=e,Ui.push(t))}function Ki(e){Fi.push(e)}function zi(e,t,n){e._x_attributeCleanups||(e._x_attributeCleanups={}),e._x_attributeCleanups[t]||(e._x_attributeCleanups[t]=[]),e._x_attributeCleanups[t].push(n)}function Vi(e,t){e._x_attributeCleanups&&Object.entries(e._x_attributeCleanups).forEach(([n,r])=>{(t===void 0||t.includes(n))&&(r.forEach(i=>i()),delete e._x_attributeCleanups[n])})}function Vs(e){if(e._x_cleanups)for(;e._x_cleanups.length;)e._x_cleanups.pop()()}var fr=new MutationObserver(gr),dr=!1;function pr(){fr.observe(document,{subtree:!0,childList:!0,attributes:!0,attributeOldValue:!0}),dr=!0}function qi(){qs(),fr.disconnect(),dr=!1}var wt=[];function qs(){let e=fr.takeRecords();wt.push(()=>e.length>0&&gr(e));let t=wt.length;queueMicrotask(()=>{if(wt.length===t)for(;wt.length>0;)wt.shift()()})}function ee(e){if(!dr)return e();qi();let t=e();return pr(),t}var hr=!1,an=[];function Gs(){hr=!0}function Xs(){hr=!1,gr(an),an=[]}function gr(e){if(hr){an=an.concat(e);return}let t=new Set,n=new Set,r=new Map,i=new Map;for(let o=0;o<e.length;o++)if(!e[o].target._x_ignoreMutationObserver&&(e[o].type==="childList"&&(e[o].addedNodes.forEach(a=>a.nodeType===1&&t.add(a)),e[o].removedNodes.forEach(a=>a.nodeType===1&&n.add(a))),e[o].type==="attributes")){let a=e[o].target,s=e[o].attributeName,c=e[o].oldValue,f=()=>{r.has(a)||r.set(a,[]),r.get(a).push({name:s,value:a.getAttribute(s)})},l=()=>{i.has(a)||i.set(a,[]),i.get(a).push(s)};a.hasAttribute(s)&&c===null?f():a.hasAttribute(s)?(l(),f()):l()}i.forEach((o,a)=>{Vi(a,o)}),r.forEach((o,a)=>{Fi.forEach(s=>s(a,o))});for(let o of n)t.has(o)||Ui.forEach(a=>a(o));t.forEach(o=>{o._x_ignoreSelf=!0,o._x_ignore=!0});for(let o of t)n.has(o)||o.isConnected&&(delete o._x_ignoreSelf,delete o._x_ignore,Wi.forEach(a=>a(o)),o._x_ignore=!0,o._x_ignoreSelf=!0);t.forEach(o=>{delete o._x_ignoreSelf,delete o._x_ignore}),t=null,n=null,r=null,i=null}function Gi(e){return Ft(vt(e))}function Ht(e,t,n){return e._x_dataStack=[t,...vt(n||e)],()=>{e._x_dataStack=e._x_dataStack.filter(r=>r!==t)}}function vt(e){return e._x_dataStack?e._x_dataStack:typeof ShadowRoot=="function"&&e instanceof ShadowRoot?vt(e.host):e.parentNode?vt(e.parentNode):[]}function Ft(e){return new Proxy({objects:e},Ys)}var Ys={ownKeys({objects:e}){return Array.from(new Set(e.flatMap(t=>Object.keys(t))))},has({objects:e},t){return t==Symbol.unscopables?!1:e.some(n=>Object.prototype.hasOwnProperty.call(n,t)||Reflect.has(n,t))},get({objects:e},t,n){return t=="toJSON"?Js:Reflect.get(e.find(r=>Reflect.has(r,t))||{},t,n)},set({objects:e},t,n,r){const i=e.find(a=>Object.prototype.hasOwnProperty.call(a,t))||e[e.length-1],o=Object.getOwnPropertyDescriptor(i,t);return o!=null&&o.set&&(o!=null&&o.get)?Reflect.set(i,t,n,r):Reflect.set(i,t,n)}};function Js(){return Reflect.ownKeys(this).reduce((t,n)=>(t[n]=Reflect.get(this,n),t),{})}function Xi(e){let t=r=>typeof r=="object"&&!Array.isArray(r)&&r!==null,n=(r,i="")=>{Object.entries(Object.getOwnPropertyDescriptors(r)).forEach(([o,{value:a,enumerable:s}])=>{if(s===!1||a===void 0||typeof a=="object"&&a!==null&&a.__v_skip)return;let c=i===""?o:`${i}.${o}`;typeof a=="object"&&a!==null&&a._x_interceptor?r[o]=a.initialize(e,c,o):t(a)&&a!==r&&!(a instanceof Element)&&n(a,c)})};return n(e)}function Yi(e,t=()=>{}){let n={initialValue:void 0,_x_interceptor:!0,initialize(r,i,o){return e(this.initialValue,()=>Zs(r,i),a=>Wn(r,i,a),i,o)}};return t(n),r=>{if(typeof r=="object"&&r!==null&&r._x_interceptor){let i=n.initialize.bind(n);n.initialize=(o,a,s)=>{let c=r.initialize(o,a,s);return n.initialValue=c,i(o,a,s)}}else n.initialValue=r;return n}}function Zs(e,t){return t.split(".").reduce((n,r)=>n[r],e)}function Wn(e,t,n){if(typeof t=="string"&&(t=t.split(".")),t.length===1)e[t[0]]=n;else{if(t.length===0)throw error;return e[t[0]]||(e[t[0]]={}),Wn(e[t[0]],t.slice(1),n)}}var Ji={};function we(e,t){Ji[e]=t}function Kn(e,t){return Object.entries(Ji).forEach(([n,r])=>{let i=null;function o(){if(i)return i;{let[a,s]=ro(t);return i={interceptor:Yi,...a},lr(t,s),i}}Object.defineProperty(e,`$${n}`,{get(){return r(t,o())},enumerable:!1})}),e}function Qs(e,t,n,...r){try{return n(...r)}catch(i){Lt(i,e,t)}}function Lt(e,t,n=void 0){e=Object.assign(e??{message:"No error message given."},{el:t,expression:n}),console.warn(`Alpine Expression Error: ${e.message}

${n?'Expression: "'+n+`"

`:""}`,t),setTimeout(()=>{throw e},0)}var tn=!0;function Zi(e){let t=tn;tn=!1;let n=e();return tn=t,n}function et(e,t,n={}){let r;return ae(e,t)(i=>r=i,n),r}function ae(...e){return Qi(...e)}var Qi=eo;function ec(e){Qi=e}function eo(e,t){let n={};Kn(n,e);let r=[n,...vt(e)],i=typeof t=="function"?tc(r,t):rc(r,t,e);return Qs.bind(null,e,t,i)}function tc(e,t){return(n=()=>{},{scope:r={},params:i=[]}={})=>{let o=t.apply(Ft([r,...e]),i);sn(n,o)}}var Cn={};function nc(e,t){if(Cn[e])return Cn[e];let n=Object.getPrototypeOf(async function(){}).constructor,r=/^[\n\s]*if.*\(.*\)/.test(e.trim())||/^(let|const)\s/.test(e.trim())?`(async()=>{ ${e} })()`:e,o=(()=>{try{let a=new n(["__self","scope"],`with (scope) { __self.result = ${r} }; __self.finished = true; return __self.result;`);return Object.defineProperty(a,"name",{value:`[Alpine] ${e}`}),a}catch(a){return Lt(a,t,e),Promise.resolve()}})();return Cn[e]=o,o}function rc(e,t,n){let r=nc(t,n);return(i=()=>{},{scope:o={},params:a=[]}={})=>{r.result=void 0,r.finished=!1;let s=Ft([o,...e]);if(typeof r=="function"){let c=r(r,s).catch(f=>Lt(f,n,t));r.finished?(sn(i,r.result,s,a,n),r.result=void 0):c.then(f=>{sn(i,f,s,a,n)}).catch(f=>Lt(f,n,t)).finally(()=>r.result=void 0)}}}function sn(e,t,n,r,i){if(tn&&typeof t=="function"){let o=t.apply(n,r);o instanceof Promise?o.then(a=>sn(e,a,n,r)).catch(a=>Lt(a,i,t)):e(o)}else typeof t=="object"&&t instanceof Promise?t.then(o=>e(o)):e(t)}var vr="x-";function xt(e=""){return vr+e}function ic(e){vr=e}var cn={};function Q(e,t){return cn[e]=t,{before(n){if(!cn[n]){console.warn(String.raw`Cannot find directive \`${n}\`. \`${e}\` will use the default order of execution`);return}const r=Je.indexOf(n);Je.splice(r>=0?r:Je.indexOf("DEFAULT"),0,e)}}}function oc(e){return Object.keys(cn).includes(e)}function _r(e,t,n){if(t=Array.from(t),e._x_virtualDirectives){let o=Object.entries(e._x_virtualDirectives).map(([s,c])=>({name:s,value:c})),a=to(o);o=o.map(s=>a.find(c=>c.name===s.name)?{name:`x-bind:${s.name}`,value:`"${s.value}"`}:s),t=t.concat(o)}let r={};return t.map(ao((o,a)=>r[o]=a)).filter(co).map(cc(r,n)).sort(uc).map(o=>sc(e,o))}function to(e){return Array.from(e).map(ao()).filter(t=>!co(t))}var zn=!1,St=new Map,no=Symbol();function ac(e){zn=!0;let t=Symbol();no=t,St.set(t,[]);let n=()=>{for(;St.get(t).length;)St.get(t).shift()();St.delete(t)},r=()=>{zn=!1,n()};e(n),r()}function ro(e){let t=[],n=s=>t.push(s),[r,i]=Ks(e);return t.push(i),[{Alpine:Wt,effect:r,cleanup:n,evaluateLater:ae.bind(ae,e),evaluate:et.bind(et,e)},()=>t.forEach(s=>s())]}function sc(e,t){let n=()=>{},r=cn[t.type]||n,[i,o]=ro(e);zi(e,t.original,o);let a=()=>{e._x_ignore||e._x_ignoreSelf||(r.inline&&r.inline(e,t,i),r=r.bind(r,e,t,i),zn?St.get(no).push(r):r())};return a.runCleanups=o,a}var io=(e,t)=>({name:n,value:r})=>(n.startsWith(e)&&(n=n.replace(e,t)),{name:n,value:r}),oo=e=>e;function ao(e=()=>{}){return({name:t,value:n})=>{let{name:r,value:i}=so.reduce((o,a)=>a(o),{name:t,value:n});return r!==t&&e(r,t),{name:r,value:i}}}var so=[];function br(e){so.push(e)}function co({name:e}){return uo().test(e)}var uo=()=>new RegExp(`^${vr}([^:^.]+)\\b`);function cc(e,t){return({name:n,value:r})=>{let i=n.match(uo()),o=n.match(/:([a-zA-Z0-9\-_:]+)/),a=n.match(/\.[^.\]]+(?=[^\]]*$)/g)||[],s=t||e[n]||n;return{type:i?i[1]:null,value:o?o[1]:null,modifiers:a.map(c=>c.replace(".","")),expression:r,original:s}}}var Vn="DEFAULT",Je=["ignore","ref","data","id","anchor","bind","init","for","model","modelable","transition","show","if",Vn,"teleport"];function uc(e,t){let n=Je.indexOf(e.type)===-1?Vn:e.type,r=Je.indexOf(t.type)===-1?Vn:t.type;return Je.indexOf(n)-Je.indexOf(r)}function Rt(e,t,n={}){e.dispatchEvent(new CustomEvent(t,{detail:n,bubbles:!0,composed:!0,cancelable:!0}))}function He(e,t){if(typeof ShadowRoot=="function"&&e instanceof ShadowRoot){Array.from(e.children).forEach(i=>He(i,t));return}let n=!1;if(t(e,()=>n=!0),n)return;let r=e.firstElementChild;for(;r;)He(r,t),r=r.nextElementSibling}function ve(e,...t){console.warn(`Alpine Warning: ${e}`,...t)}var ei=!1;function lc(){ei&&ve("Alpine has already been initialized on this page. Calling Alpine.start() more than once can cause problems."),ei=!0,document.body||ve("Unable to initialize. Trying to load Alpine before `<body>` is available. Did you forget to add `defer` in Alpine's `<script>` tag?"),Rt(document,"alpine:init"),Rt(document,"alpine:initializing"),pr(),zs(t=>Ne(t,He)),lr(t=>_o(t)),Ki((t,n)=>{_r(t,n).forEach(r=>r())});let e=t=>!pn(t.parentElement,!0);Array.from(document.querySelectorAll(po().join(","))).filter(e).forEach(t=>{Ne(t)}),Rt(document,"alpine:initialized"),setTimeout(()=>{pc()})}var yr=[],lo=[];function fo(){return yr.map(e=>e())}function po(){return yr.concat(lo).map(e=>e())}function ho(e){yr.push(e)}function go(e){lo.push(e)}function pn(e,t=!1){return Ut(e,n=>{if((t?po():fo()).some(i=>n.matches(i)))return!0})}function Ut(e,t){if(e){if(t(e))return e;if(e._x_teleportBack&&(e=e._x_teleportBack),!!e.parentElement)return Ut(e.parentElement,t)}}function fc(e){return fo().some(t=>e.matches(t))}var vo=[];function dc(e){vo.push(e)}function Ne(e,t=He,n=()=>{}){ac(()=>{t(e,(r,i)=>{n(r,i),vo.forEach(o=>o(r,i)),_r(r,r.attributes).forEach(o=>o()),r._x_ignore&&i()})})}function _o(e,t=He){t(e,n=>{Vi(n),Vs(n)})}function pc(){[["ui","dialog",["[x-dialog], [x-popover]"]],["anchor","anchor",["[x-anchor]"]],["sort","sort",["[x-sort]"]]].forEach(([t,n,r])=>{oc(n)||r.some(i=>{if(document.querySelector(i))return ve(`found "${i}", but missing ${t} plugin`),!0})})}var qn=[],mr=!1;function xr(e=()=>{}){return queueMicrotask(()=>{mr||setTimeout(()=>{Gn()})}),new Promise(t=>{qn.push(()=>{e(),t()})})}function Gn(){for(mr=!1;qn.length;)qn.shift()()}function hc(){mr=!0}function Er(e,t){return Array.isArray(t)?ti(e,t.join(" ")):typeof t=="object"&&t!==null?gc(e,t):typeof t=="function"?Er(e,t()):ti(e,t)}function ti(e,t){let n=i=>i.split(" ").filter(o=>!e.classList.contains(o)).filter(Boolean),r=i=>(e.classList.add(...i),()=>{e.classList.remove(...i)});return t=t===!0?t="":t||"",r(n(t))}function gc(e,t){let n=s=>s.split(" ").filter(Boolean),r=Object.entries(t).flatMap(([s,c])=>c?n(s):!1).filter(Boolean),i=Object.entries(t).flatMap(([s,c])=>c?!1:n(s)).filter(Boolean),o=[],a=[];return i.forEach(s=>{e.classList.contains(s)&&(e.classList.remove(s),a.push(s))}),r.forEach(s=>{e.classList.contains(s)||(e.classList.add(s),o.push(s))}),()=>{a.forEach(s=>e.classList.add(s)),o.forEach(s=>e.classList.remove(s))}}function hn(e,t){return typeof t=="object"&&t!==null?vc(e,t):_c(e,t)}function vc(e,t){let n={};return Object.entries(t).forEach(([r,i])=>{n[r]=e.style[r],r.startsWith("--")||(r=bc(r)),e.style.setProperty(r,i)}),setTimeout(()=>{e.style.length===0&&e.removeAttribute("style")}),()=>{hn(e,n)}}function _c(e,t){let n=e.getAttribute("style",t);return e.setAttribute("style",t),()=>{e.setAttribute("style",n||"")}}function bc(e){return e.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase()}function Xn(e,t=()=>{}){let n=!1;return function(){n?t.apply(this,arguments):(n=!0,e.apply(this,arguments))}}Q("transition",(e,{value:t,modifiers:n,expression:r},{evaluate:i})=>{typeof r=="function"&&(r=i(r)),r!==!1&&(!r||typeof r=="boolean"?mc(e,n,t):yc(e,r,t))});function yc(e,t,n){bo(e,Er,""),{enter:i=>{e._x_transition.enter.during=i},"enter-start":i=>{e._x_transition.enter.start=i},"enter-end":i=>{e._x_transition.enter.end=i},leave:i=>{e._x_transition.leave.during=i},"leave-start":i=>{e._x_transition.leave.start=i},"leave-end":i=>{e._x_transition.leave.end=i}}[n](t)}function mc(e,t,n){bo(e,hn);let r=!t.includes("in")&&!t.includes("out")&&!n,i=r||t.includes("in")||["enter"].includes(n),o=r||t.includes("out")||["leave"].includes(n);t.includes("in")&&!r&&(t=t.filter((E,O)=>O<t.indexOf("out"))),t.includes("out")&&!r&&(t=t.filter((E,O)=>O>t.indexOf("out")));let a=!t.includes("opacity")&&!t.includes("scale"),s=a||t.includes("opacity"),c=a||t.includes("scale"),f=s?0:1,l=c?Ot(t,"scale",95)/100:1,v=Ot(t,"delay",0)/1e3,b=Ot(t,"origin","center"),_="opacity, transform",A=Ot(t,"duration",150)/1e3,S=Ot(t,"duration",75)/1e3,h="cubic-bezier(0.4, 0.0, 0.2, 1)";i&&(e._x_transition.enter.during={transformOrigin:b,transitionDelay:`${v}s`,transitionProperty:_,transitionDuration:`${A}s`,transitionTimingFunction:h},e._x_transition.enter.start={opacity:f,transform:`scale(${l})`},e._x_transition.enter.end={opacity:1,transform:"scale(1)"}),o&&(e._x_transition.leave.during={transformOrigin:b,transitionDelay:`${v}s`,transitionProperty:_,transitionDuration:`${S}s`,transitionTimingFunction:h},e._x_transition.leave.start={opacity:1,transform:"scale(1)"},e._x_transition.leave.end={opacity:f,transform:`scale(${l})`})}function bo(e,t,n={}){e._x_transition||(e._x_transition={enter:{during:n,start:n,end:n},leave:{during:n,start:n,end:n},in(r=()=>{},i=()=>{}){Yn(e,t,{during:this.enter.during,start:this.enter.start,end:this.enter.end},r,i)},out(r=()=>{},i=()=>{}){Yn(e,t,{during:this.leave.during,start:this.leave.start,end:this.leave.end},r,i)}})}window.Element.prototype._x_toggleAndCascadeWithTransitions=function(e,t,n,r){const i=document.visibilityState==="visible"?requestAnimationFrame:setTimeout;let o=()=>i(n);if(t){e._x_transition&&(e._x_transition.enter||e._x_transition.leave)?e._x_transition.enter&&(Object.entries(e._x_transition.enter.during).length||Object.entries(e._x_transition.enter.start).length||Object.entries(e._x_transition.enter.end).length)?e._x_transition.in(n):o():e._x_transition?e._x_transition.in(n):o();return}e._x_hidePromise=e._x_transition?new Promise((a,s)=>{e._x_transition.out(()=>{},()=>a(r)),e._x_transitioning&&e._x_transitioning.beforeCancel(()=>s({isFromCancelledTransition:!0}))}):Promise.resolve(r),queueMicrotask(()=>{let a=yo(e);a?(a._x_hideChildren||(a._x_hideChildren=[]),a._x_hideChildren.push(e)):i(()=>{let s=c=>{let f=Promise.all([c._x_hidePromise,...(c._x_hideChildren||[]).map(s)]).then(([l])=>l());return delete c._x_hidePromise,delete c._x_hideChildren,f};s(e).catch(c=>{if(!c.isFromCancelledTransition)throw c})})})};function yo(e){let t=e.parentNode;if(t)return t._x_hidePromise?t:yo(t)}function Yn(e,t,{during:n,start:r,end:i}={},o=()=>{},a=()=>{}){if(e._x_transitioning&&e._x_transitioning.cancel(),Object.keys(n).length===0&&Object.keys(r).length===0&&Object.keys(i).length===0){o(),a();return}let s,c,f;xc(e,{start(){s=t(e,r)},during(){c=t(e,n)},before:o,end(){s(),f=t(e,i)},after:a,cleanup(){c(),f()}})}function xc(e,t){let n,r,i,o=Xn(()=>{ee(()=>{n=!0,r||t.before(),i||(t.end(),Gn()),t.after(),e.isConnected&&t.cleanup(),delete e._x_transitioning})});e._x_transitioning={beforeCancels:[],beforeCancel(a){this.beforeCancels.push(a)},cancel:Xn(function(){for(;this.beforeCancels.length;)this.beforeCancels.shift()();o()}),finish:o},ee(()=>{t.start(),t.during()}),hc(),requestAnimationFrame(()=>{if(n)return;let a=Number(getComputedStyle(e).transitionDuration.replace(/,.*/,"").replace("s",""))*1e3,s=Number(getComputedStyle(e).transitionDelay.replace(/,.*/,"").replace("s",""))*1e3;a===0&&(a=Number(getComputedStyle(e).animationDuration.replace("s",""))*1e3),ee(()=>{t.before()}),r=!0,requestAnimationFrame(()=>{n||(ee(()=>{t.end()}),Gn(),setTimeout(e._x_transitioning.finish,a+s),i=!0)})})}function Ot(e,t,n){if(e.indexOf(t)===-1)return n;const r=e[e.indexOf(t)+1];if(!r||t==="scale"&&isNaN(r))return n;if(t==="duration"||t==="delay"){let i=r.match(/([0-9]+)ms/);if(i)return i[1]}return t==="origin"&&["top","right","left","center","bottom"].includes(e[e.indexOf(t)+2])?[r,e[e.indexOf(t)+2]].join(" "):r}var Fe=!1;function Ke(e,t=()=>{}){return(...n)=>Fe?t(...n):e(...n)}function Ec(e){return(...t)=>Fe&&e(...t)}var mo=[];function gn(e){mo.push(e)}function wc(e,t){mo.forEach(n=>n(e,t)),Fe=!0,xo(()=>{Ne(t,(n,r)=>{r(n,()=>{})})}),Fe=!1}var Jn=!1;function Oc(e,t){t._x_dataStack||(t._x_dataStack=e._x_dataStack),Fe=!0,Jn=!0,xo(()=>{Ac(t)}),Fe=!1,Jn=!1}function Ac(e){let t=!1;Ne(e,(r,i)=>{He(r,(o,a)=>{if(t&&fc(o))return a();t=!0,i(o,a)})})}function xo(e){let t=ot;Qr((n,r)=>{let i=t(n);return mt(i),()=>{}}),e(),Qr(t)}function Eo(e,t,n,r=[]){switch(e._x_bindings||(e._x_bindings=yt({})),e._x_bindings[t]=n,t=r.includes("camel")?Nc(t):t,t){case"value":Sc(e,n);break;case"style":Mc(e,n);break;case"class":Tc(e,n);break;case"selected":case"checked":Cc(e,t,n);break;default:wo(e,t,n);break}}function Sc(e,t){if(e.type==="radio")e.attributes.value===void 0&&(e.value=t),window.fromModel&&(typeof t=="boolean"?e.checked=nn(e.value)===t:e.checked=ni(e.value,t));else if(e.type==="checkbox")Number.isInteger(t)?e.value=t:!Array.isArray(t)&&typeof t!="boolean"&&![null,void 0].includes(t)?e.value=String(t):Array.isArray(t)?e.checked=t.some(n=>ni(n,e.value)):e.checked=!!t;else if(e.tagName==="SELECT")Dc(e,t);else{if(e.value===t)return;e.value=t===void 0?"":t}}function Tc(e,t){e._x_undoAddedClasses&&e._x_undoAddedClasses(),e._x_undoAddedClasses=Er(e,t)}function Mc(e,t){e._x_undoAddedStyles&&e._x_undoAddedStyles(),e._x_undoAddedStyles=hn(e,t)}function Cc(e,t,n){wo(e,t,n),Ic(e,t,n)}function wo(e,t,n){[null,void 0,!1].includes(n)&&Lc(t)?e.removeAttribute(t):(Oo(t)&&(n=t),Rc(e,t,n))}function Rc(e,t,n){e.getAttribute(t)!=n&&e.setAttribute(t,n)}function Ic(e,t,n){e[t]!==n&&(e[t]=n)}function Dc(e,t){const n=[].concat(t).map(r=>r+"");Array.from(e.options).forEach(r=>{r.selected=n.includes(r.value)})}function Nc(e){return e.toLowerCase().replace(/-(\w)/g,(t,n)=>n.toUpperCase())}function ni(e,t){return e==t}function nn(e){return[1,"1","true","on","yes",!0].includes(e)?!0:[0,"0","false","off","no",!1].includes(e)?!1:e?!!e:null}function Oo(e){return["disabled","checked","required","readonly","open","selected","autofocus","itemscope","multiple","novalidate","allowfullscreen","allowpaymentrequest","formnovalidate","autoplay","controls","loop","muted","playsinline","default","ismap","reversed","async","defer","nomodule"].includes(e)}function Lc(e){return!["aria-pressed","aria-checked","aria-expanded","aria-selected"].includes(e)}function Pc(e,t,n){return e._x_bindings&&e._x_bindings[t]!==void 0?e._x_bindings[t]:Ao(e,t,n)}function kc(e,t,n,r=!0){if(e._x_bindings&&e._x_bindings[t]!==void 0)return e._x_bindings[t];if(e._x_inlineBindings&&e._x_inlineBindings[t]!==void 0){let i=e._x_inlineBindings[t];return i.extract=r,Zi(()=>et(e,i.expression))}return Ao(e,t,n)}function Ao(e,t,n){let r=e.getAttribute(t);return r===null?typeof n=="function"?n():n:r===""?!0:Oo(t)?!![t,"true"].includes(r):r}function So(e,t){var n;return function(){var r=this,i=arguments,o=function(){n=null,e.apply(r,i)};clearTimeout(n),n=setTimeout(o,t)}}function To(e,t){let n;return function(){let r=this,i=arguments;n||(e.apply(r,i),n=!0,setTimeout(()=>n=!1,t))}}function Mo({get:e,set:t},{get:n,set:r}){let i=!0,o,a=ot(()=>{let s=e(),c=n();if(i)r(Rn(s)),i=!1;else{let f=JSON.stringify(s),l=JSON.stringify(c);f!==o?r(Rn(s)):f!==l&&t(Rn(c))}o=JSON.stringify(e()),JSON.stringify(n())});return()=>{mt(a)}}function Rn(e){return typeof e=="object"?JSON.parse(JSON.stringify(e)):e}function Bc(e){(Array.isArray(e)?e:[e]).forEach(n=>n(Wt))}var Ye={},ri=!1;function $c(e,t){if(ri||(Ye=yt(Ye),ri=!0),t===void 0)return Ye[e];Ye[e]=t,typeof t=="object"&&t!==null&&t.hasOwnProperty("init")&&typeof t.init=="function"&&Ye[e].init(),Xi(Ye[e])}function jc(){return Ye}var Co={};function Hc(e,t){let n=typeof t!="function"?()=>t:t;return e instanceof Element?Ro(e,n()):(Co[e]=n,()=>{})}function Fc(e){return Object.entries(Co).forEach(([t,n])=>{Object.defineProperty(e,t,{get(){return(...r)=>n(...r)}})}),e}function Ro(e,t,n){let r=[];for(;r.length;)r.pop()();let i=Object.entries(t).map(([a,s])=>({name:a,value:s})),o=to(i);return i=i.map(a=>o.find(s=>s.name===a.name)?{name:`x-bind:${a.name}`,value:`"${a.value}"`}:a),_r(e,i,n).map(a=>{r.push(a.runCleanups),a()}),()=>{for(;r.length;)r.pop()()}}var Io={};function Uc(e,t){Io[e]=t}function Wc(e,t){return Object.entries(Io).forEach(([n,r])=>{Object.defineProperty(e,n,{get(){return(...i)=>r.bind(t)(...i)},enumerable:!1})}),e}var Kc={get reactive(){return yt},get release(){return mt},get effect(){return ot},get raw(){return ji},version:"3.13.10",flushAndStopDeferringMutations:Xs,dontAutoEvaluateFunctions:Zi,disableEffectScheduling:Us,startObservingMutations:pr,stopObservingMutations:qi,setReactivityEngine:Ws,onAttributeRemoved:zi,onAttributesAdded:Ki,closestDataStack:vt,skipDuringClone:Ke,onlyDuringClone:Ec,addRootSelector:ho,addInitSelector:go,interceptClone:gn,addScopeToNode:Ht,deferMutations:Gs,mapAttributes:br,evaluateLater:ae,interceptInit:dc,setEvaluator:ec,mergeProxies:Ft,extractProp:kc,findClosest:Ut,onElRemoved:lr,closestRoot:pn,destroyTree:_o,interceptor:Yi,transition:Yn,setStyles:hn,mutateDom:ee,directive:Q,entangle:Mo,throttle:To,debounce:So,evaluate:et,initTree:Ne,nextTick:xr,prefixed:xt,prefix:ic,plugin:Bc,magic:we,store:$c,start:lc,clone:Oc,cloneNode:wc,bound:Pc,$data:Gi,watch:Hi,walk:He,data:Uc,bind:Hc},Wt=Kc;function zc(e,t){const n=Object.create(null),r=e.split(",");for(let i=0;i<r.length;i++)n[r[i]]=!0;return i=>!!n[i]}var Vc=Object.freeze({}),qc=Object.prototype.hasOwnProperty,vn=(e,t)=>qc.call(e,t),tt=Array.isArray,It=e=>Do(e)==="[object Map]",Gc=e=>typeof e=="string",wr=e=>typeof e=="symbol",_n=e=>e!==null&&typeof e=="object",Xc=Object.prototype.toString,Do=e=>Xc.call(e),No=e=>Do(e).slice(8,-1),Or=e=>Gc(e)&&e!=="NaN"&&e[0]!=="-"&&""+parseInt(e,10)===e,Yc=e=>{const t=Object.create(null);return n=>t[n]||(t[n]=e(n))},Jc=Yc(e=>e.charAt(0).toUpperCase()+e.slice(1)),Lo=(e,t)=>e!==t&&(e===e||t===t),Zn=new WeakMap,At=[],Ae,nt=Symbol("iterate"),Qn=Symbol("Map key iterate");function Zc(e){return e&&e._isEffect===!0}function Qc(e,t=Vc){Zc(e)&&(e=e.raw);const n=nu(e,t);return t.lazy||n(),n}function eu(e){e.active&&(Po(e),e.options.onStop&&e.options.onStop(),e.active=!1)}var tu=0;function nu(e,t){const n=function(){if(!n.active)return e();if(!At.includes(n)){Po(n);try{return iu(),At.push(n),Ae=n,e()}finally{At.pop(),ko(),Ae=At[At.length-1]}}};return n.id=tu++,n.allowRecurse=!!t.allowRecurse,n._isEffect=!0,n.active=!0,n.raw=e,n.deps=[],n.options=t,n}function Po(e){const{deps:t}=e;if(t.length){for(let n=0;n<t.length;n++)t[n].delete(e);t.length=0}}var _t=!0,Ar=[];function ru(){Ar.push(_t),_t=!1}function iu(){Ar.push(_t),_t=!0}function ko(){const e=Ar.pop();_t=e===void 0?!0:e}function Ee(e,t,n){if(!_t||Ae===void 0)return;let r=Zn.get(e);r||Zn.set(e,r=new Map);let i=r.get(n);i||r.set(n,i=new Set),i.has(Ae)||(i.add(Ae),Ae.deps.push(i),Ae.options.onTrack&&Ae.options.onTrack({effect:Ae,target:e,type:t,key:n}))}function Ue(e,t,n,r,i,o){const a=Zn.get(e);if(!a)return;const s=new Set,c=l=>{l&&l.forEach(v=>{(v!==Ae||v.allowRecurse)&&s.add(v)})};if(t==="clear")a.forEach(c);else if(n==="length"&&tt(e))a.forEach((l,v)=>{(v==="length"||v>=r)&&c(l)});else switch(n!==void 0&&c(a.get(n)),t){case"add":tt(e)?Or(n)&&c(a.get("length")):(c(a.get(nt)),It(e)&&c(a.get(Qn)));break;case"delete":tt(e)||(c(a.get(nt)),It(e)&&c(a.get(Qn)));break;case"set":It(e)&&c(a.get(nt));break}const f=l=>{l.options.onTrigger&&l.options.onTrigger({effect:l,target:e,key:n,type:t,newValue:r,oldValue:i,oldTarget:o}),l.options.scheduler?l.options.scheduler(l):l()};s.forEach(f)}var ou=zc("__proto__,__v_isRef,__isVue"),Bo=new Set(Object.getOwnPropertyNames(Symbol).map(e=>Symbol[e]).filter(wr)),au=$o(),su=$o(!0),ii=cu();function cu(){const e={};return["includes","indexOf","lastIndexOf"].forEach(t=>{e[t]=function(...n){const r=X(this);for(let o=0,a=this.length;o<a;o++)Ee(r,"get",o+"");const i=r[t](...n);return i===-1||i===!1?r[t](...n.map(X)):i}}),["push","pop","shift","unshift","splice"].forEach(t=>{e[t]=function(...n){ru();const r=X(this)[t].apply(this,n);return ko(),r}}),e}function $o(e=!1,t=!1){return function(r,i,o){if(i==="__v_isReactive")return!e;if(i==="__v_isReadonly")return e;if(i==="__v_raw"&&o===(e?t?Eu:Uo:t?xu:Fo).get(r))return r;const a=tt(r);if(!e&&a&&vn(ii,i))return Reflect.get(ii,i,o);const s=Reflect.get(r,i,o);return(wr(i)?Bo.has(i):ou(i))||(e||Ee(r,"get",i),t)?s:er(s)?!a||!Or(i)?s.value:s:_n(s)?e?Wo(s):Cr(s):s}}var uu=lu();function lu(e=!1){return function(n,r,i,o){let a=n[r];if(!e&&(i=X(i),a=X(a),!tt(n)&&er(a)&&!er(i)))return a.value=i,!0;const s=tt(n)&&Or(r)?Number(r)<n.length:vn(n,r),c=Reflect.set(n,r,i,o);return n===X(o)&&(s?Lo(i,a)&&Ue(n,"set",r,i,a):Ue(n,"add",r,i)),c}}function fu(e,t){const n=vn(e,t),r=e[t],i=Reflect.deleteProperty(e,t);return i&&n&&Ue(e,"delete",t,void 0,r),i}function du(e,t){const n=Reflect.has(e,t);return(!wr(t)||!Bo.has(t))&&Ee(e,"has",t),n}function pu(e){return Ee(e,"iterate",tt(e)?"length":nt),Reflect.ownKeys(e)}var hu={get:au,set:uu,deleteProperty:fu,has:du,ownKeys:pu},gu={get:su,set(e,t){return console.warn(`Set operation on key "${String(t)}" failed: target is readonly.`,e),!0},deleteProperty(e,t){return console.warn(`Delete operation on key "${String(t)}" failed: target is readonly.`,e),!0}},Sr=e=>_n(e)?Cr(e):e,Tr=e=>_n(e)?Wo(e):e,Mr=e=>e,bn=e=>Reflect.getPrototypeOf(e);function Gt(e,t,n=!1,r=!1){e=e.__v_raw;const i=X(e),o=X(t);t!==o&&!n&&Ee(i,"get",t),!n&&Ee(i,"get",o);const{has:a}=bn(i),s=r?Mr:n?Tr:Sr;if(a.call(i,t))return s(e.get(t));if(a.call(i,o))return s(e.get(o));e!==i&&e.get(t)}function Xt(e,t=!1){const n=this.__v_raw,r=X(n),i=X(e);return e!==i&&!t&&Ee(r,"has",e),!t&&Ee(r,"has",i),e===i?n.has(e):n.has(e)||n.has(i)}function Yt(e,t=!1){return e=e.__v_raw,!t&&Ee(X(e),"iterate",nt),Reflect.get(e,"size",e)}function oi(e){e=X(e);const t=X(this);return bn(t).has.call(t,e)||(t.add(e),Ue(t,"add",e,e)),this}function ai(e,t){t=X(t);const n=X(this),{has:r,get:i}=bn(n);let o=r.call(n,e);o?Ho(n,r,e):(e=X(e),o=r.call(n,e));const a=i.call(n,e);return n.set(e,t),o?Lo(t,a)&&Ue(n,"set",e,t,a):Ue(n,"add",e,t),this}function si(e){const t=X(this),{has:n,get:r}=bn(t);let i=n.call(t,e);i?Ho(t,n,e):(e=X(e),i=n.call(t,e));const o=r?r.call(t,e):void 0,a=t.delete(e);return i&&Ue(t,"delete",e,void 0,o),a}function ci(){const e=X(this),t=e.size!==0,n=It(e)?new Map(e):new Set(e),r=e.clear();return t&&Ue(e,"clear",void 0,void 0,n),r}function Jt(e,t){return function(r,i){const o=this,a=o.__v_raw,s=X(a),c=t?Mr:e?Tr:Sr;return!e&&Ee(s,"iterate",nt),a.forEach((f,l)=>r.call(i,c(f),c(l),o))}}function Zt(e,t,n){return function(...r){const i=this.__v_raw,o=X(i),a=It(o),s=e==="entries"||e===Symbol.iterator&&a,c=e==="keys"&&a,f=i[e](...r),l=n?Mr:t?Tr:Sr;return!t&&Ee(o,"iterate",c?Qn:nt),{next(){const{value:v,done:b}=f.next();return b?{value:v,done:b}:{value:s?[l(v[0]),l(v[1])]:l(v),done:b}},[Symbol.iterator](){return this}}}}function $e(e){return function(...t){{const n=t[0]?`on key "${t[0]}" `:"";console.warn(`${Jc(e)} operation ${n}failed: target is readonly.`,X(this))}return e==="delete"?!1:this}}function vu(){const e={get(o){return Gt(this,o)},get size(){return Yt(this)},has:Xt,add:oi,set:ai,delete:si,clear:ci,forEach:Jt(!1,!1)},t={get(o){return Gt(this,o,!1,!0)},get size(){return Yt(this)},has:Xt,add:oi,set:ai,delete:si,clear:ci,forEach:Jt(!1,!0)},n={get(o){return Gt(this,o,!0)},get size(){return Yt(this,!0)},has(o){return Xt.call(this,o,!0)},add:$e("add"),set:$e("set"),delete:$e("delete"),clear:$e("clear"),forEach:Jt(!0,!1)},r={get(o){return Gt(this,o,!0,!0)},get size(){return Yt(this,!0)},has(o){return Xt.call(this,o,!0)},add:$e("add"),set:$e("set"),delete:$e("delete"),clear:$e("clear"),forEach:Jt(!0,!0)};return["keys","values","entries",Symbol.iterator].forEach(o=>{e[o]=Zt(o,!1,!1),n[o]=Zt(o,!0,!1),t[o]=Zt(o,!1,!0),r[o]=Zt(o,!0,!0)}),[e,n,t,r]}var[_u,bu,jl,Hl]=vu();function jo(e,t){const n=e?bu:_u;return(r,i,o)=>i==="__v_isReactive"?!e:i==="__v_isReadonly"?e:i==="__v_raw"?r:Reflect.get(vn(n,i)&&i in r?n:r,i,o)}var yu={get:jo(!1)},mu={get:jo(!0)};function Ho(e,t,n){const r=X(n);if(r!==n&&t.call(e,r)){const i=No(e);console.warn(`Reactive ${i} contains both the raw and reactive versions of the same object${i==="Map"?" as keys":""}, which can lead to inconsistencies. Avoid differentiating between the raw and reactive versions of an object and only use the reactive version if possible.`)}}var Fo=new WeakMap,xu=new WeakMap,Uo=new WeakMap,Eu=new WeakMap;function wu(e){switch(e){case"Object":case"Array":return 1;case"Map":case"Set":case"WeakMap":case"WeakSet":return 2;default:return 0}}function Ou(e){return e.__v_skip||!Object.isExtensible(e)?0:wu(No(e))}function Cr(e){return e&&e.__v_isReadonly?e:Ko(e,!1,hu,yu,Fo)}function Wo(e){return Ko(e,!0,gu,mu,Uo)}function Ko(e,t,n,r,i){if(!_n(e))return console.warn(`value cannot be made reactive: ${String(e)}`),e;if(e.__v_raw&&!(t&&e.__v_isReactive))return e;const o=i.get(e);if(o)return o;const a=Ou(e);if(a===0)return e;const s=new Proxy(e,a===2?r:n);return i.set(e,s),s}function X(e){return e&&X(e.__v_raw)||e}function er(e){return!!(e&&e.__v_isRef===!0)}we("nextTick",()=>xr);we("dispatch",e=>Rt.bind(Rt,e));we("watch",(e,{evaluateLater:t,cleanup:n})=>(r,i)=>{let o=t(r),s=Hi(()=>{let c;return o(f=>c=f),c},i);n(s)});we("store",jc);we("data",e=>Gi(e));we("root",e=>pn(e));we("refs",e=>(e._x_refs_proxy||(e._x_refs_proxy=Ft(Au(e))),e._x_refs_proxy));function Au(e){let t=[];return Ut(e,n=>{n._x_refs&&t.push(n._x_refs)}),t}var In={};function zo(e){return In[e]||(In[e]=0),++In[e]}function Su(e,t){return Ut(e,n=>{if(n._x_ids&&n._x_ids[t])return!0})}function Tu(e,t){e._x_ids||(e._x_ids={}),e._x_ids[t]||(e._x_ids[t]=zo(t))}we("id",(e,{cleanup:t})=>(n,r=null)=>{let i=`${n}${r?`-${r}`:""}`;return Mu(e,i,t,()=>{let o=Su(e,n),a=o?o._x_ids[n]:zo(n);return r?`${n}-${a}-${r}`:`${n}-${a}`})});gn((e,t)=>{e._x_id&&(t._x_id=e._x_id)});function Mu(e,t,n,r){if(e._x_id||(e._x_id={}),e._x_id[t])return e._x_id[t];let i=r();return e._x_id[t]=i,n(()=>{delete e._x_id[t]}),i}we("el",e=>e);Vo("Focus","focus","focus");Vo("Persist","persist","persist");function Vo(e,t,n){we(t,r=>ve(`You can't use [$${t}] without first installing the "${e}" plugin here: https://alpinejs.dev/plugins/${n}`,r))}Q("modelable",(e,{expression:t},{effect:n,evaluateLater:r,cleanup:i})=>{let o=r(t),a=()=>{let l;return o(v=>l=v),l},s=r(`${t} = __placeholder`),c=l=>s(()=>{},{scope:{__placeholder:l}}),f=a();c(f),queueMicrotask(()=>{if(!e._x_model)return;e._x_removeModelListeners.default();let l=e._x_model.get,v=e._x_model.set,b=Mo({get(){return l()},set(_){v(_)}},{get(){return a()},set(_){c(_)}});i(b)})});Q("teleport",(e,{modifiers:t,expression:n},{cleanup:r})=>{e.tagName.toLowerCase()!=="template"&&ve("x-teleport can only be used on a <template> tag",e);let i=ui(n),o=e.content.cloneNode(!0).firstElementChild;e._x_teleport=o,o._x_teleportBack=e,e.setAttribute("data-teleport-template",!0),o.setAttribute("data-teleport-target",!0),e._x_forwardEvents&&e._x_forwardEvents.forEach(s=>{o.addEventListener(s,c=>{c.stopPropagation(),e.dispatchEvent(new c.constructor(c.type,c))})}),Ht(o,{},e);let a=(s,c,f)=>{f.includes("prepend")?c.parentNode.insertBefore(s,c):f.includes("append")?c.parentNode.insertBefore(s,c.nextSibling):c.appendChild(s)};ee(()=>{a(o,i,t),Ke(()=>{Ne(o),o._x_ignore=!0})()}),e._x_teleportPutBack=()=>{let s=ui(n);ee(()=>{a(e._x_teleport,s,t)})},r(()=>o.remove())});var Cu=document.createElement("div");function ui(e){let t=Ke(()=>document.querySelector(e),()=>Cu)();return t||ve(`Cannot find x-teleport element for selector: "${e}"`),t}var qo=()=>{};qo.inline=(e,{modifiers:t},{cleanup:n})=>{t.includes("self")?e._x_ignoreSelf=!0:e._x_ignore=!0,n(()=>{t.includes("self")?delete e._x_ignoreSelf:delete e._x_ignore})};Q("ignore",qo);Q("effect",Ke((e,{expression:t},{effect:n})=>{n(ae(e,t))}));function tr(e,t,n,r){let i=e,o=c=>r(c),a={},s=(c,f)=>l=>f(c,l);if(n.includes("dot")&&(t=Ru(t)),n.includes("camel")&&(t=Iu(t)),n.includes("passive")&&(a.passive=!0),n.includes("capture")&&(a.capture=!0),n.includes("window")&&(i=window),n.includes("document")&&(i=document),n.includes("debounce")){let c=n[n.indexOf("debounce")+1]||"invalid-wait",f=un(c.split("ms")[0])?Number(c.split("ms")[0]):250;o=So(o,f)}if(n.includes("throttle")){let c=n[n.indexOf("throttle")+1]||"invalid-wait",f=un(c.split("ms")[0])?Number(c.split("ms")[0]):250;o=To(o,f)}return n.includes("prevent")&&(o=s(o,(c,f)=>{f.preventDefault(),c(f)})),n.includes("stop")&&(o=s(o,(c,f)=>{f.stopPropagation(),c(f)})),n.includes("once")&&(o=s(o,(c,f)=>{c(f),i.removeEventListener(t,o,a)})),(n.includes("away")||n.includes("outside"))&&(i=document,o=s(o,(c,f)=>{e.contains(f.target)||f.target.isConnected!==!1&&(e.offsetWidth<1&&e.offsetHeight<1||e._x_isShown!==!1&&c(f))})),n.includes("self")&&(o=s(o,(c,f)=>{f.target===e&&c(f)})),o=s(o,(c,f)=>{Nu(t)&&Lu(f,n)||c(f)}),i.addEventListener(t,o,a),()=>{i.removeEventListener(t,o,a)}}function Ru(e){return e.replace(/-/g,".")}function Iu(e){return e.toLowerCase().replace(/-(\w)/g,(t,n)=>n.toUpperCase())}function un(e){return!Array.isArray(e)&&!isNaN(e)}function Du(e){return[" ","_"].includes(e)?e:e.replace(/([a-z])([A-Z])/g,"$1-$2").replace(/[_\s]/,"-").toLowerCase()}function Nu(e){return["keydown","keyup"].includes(e)}function Lu(e,t){let n=t.filter(o=>!["window","document","prevent","stop","once","capture"].includes(o));if(n.includes("debounce")){let o=n.indexOf("debounce");n.splice(o,un((n[o+1]||"invalid-wait").split("ms")[0])?2:1)}if(n.includes("throttle")){let o=n.indexOf("throttle");n.splice(o,un((n[o+1]||"invalid-wait").split("ms")[0])?2:1)}if(n.length===0||n.length===1&&li(e.key).includes(n[0]))return!1;const i=["ctrl","shift","alt","meta","cmd","super"].filter(o=>n.includes(o));return n=n.filter(o=>!i.includes(o)),!(i.length>0&&i.filter(a=>((a==="cmd"||a==="super")&&(a="meta"),e[`${a}Key`])).length===i.length&&li(e.key).includes(n[0]))}function li(e){if(!e)return[];e=Du(e);let t={ctrl:"control",slash:"/",space:" ",spacebar:" ",cmd:"meta",esc:"escape",up:"arrow-up",down:"arrow-down",left:"arrow-left",right:"arrow-right",period:".",comma:",",equal:"=",minus:"-",underscore:"_"};return t[e]=e,Object.keys(t).map(n=>{if(t[n]===e)return n}).filter(n=>n)}Q("model",(e,{modifiers:t,expression:n},{effect:r,cleanup:i})=>{let o=e;t.includes("parent")&&(o=e.parentNode);let a=ae(o,n),s;typeof n=="string"?s=ae(o,`${n} = __placeholder`):typeof n=="function"&&typeof n()=="string"?s=ae(o,`${n()} = __placeholder`):s=()=>{};let c=()=>{let b;return a(_=>b=_),fi(b)?b.get():b},f=b=>{let _;a(A=>_=A),fi(_)?_.set(b):s(()=>{},{scope:{__placeholder:b}})};typeof n=="string"&&e.type==="radio"&&ee(()=>{e.hasAttribute("name")||e.setAttribute("name",n)});var l=e.tagName.toLowerCase()==="select"||["checkbox","radio"].includes(e.type)||t.includes("lazy")?"change":"input";let v=Fe?()=>{}:tr(e,l,t,b=>{f(Dn(e,t,b,c()))});if(t.includes("fill")&&([void 0,null,""].includes(c())||e.type==="checkbox"&&Array.isArray(c())||e.tagName.toLowerCase()==="select"&&e.multiple)&&f(Dn(e,t,{target:e},c())),e._x_removeModelListeners||(e._x_removeModelListeners={}),e._x_removeModelListeners.default=v,i(()=>e._x_removeModelListeners.default()),e.form){let b=tr(e.form,"reset",[],_=>{xr(()=>e._x_model&&e._x_model.set(Dn(e,t,{target:e},c())))});i(()=>b())}e._x_model={get(){return c()},set(b){f(b)}},e._x_forceModelUpdate=b=>{b===void 0&&typeof n=="string"&&n.match(/\./)&&(b=""),window.fromModel=!0,ee(()=>Eo(e,"value",b)),delete window.fromModel},r(()=>{let b=c();t.includes("unintrusive")&&document.activeElement.isSameNode(e)||e._x_forceModelUpdate(b)})});function Dn(e,t,n,r){return ee(()=>{if(n instanceof CustomEvent&&n.detail!==void 0)return n.detail!==null&&n.detail!==void 0?n.detail:n.target.value;if(e.type==="checkbox")if(Array.isArray(r)){let i=null;return t.includes("number")?i=Nn(n.target.value):t.includes("boolean")?i=nn(n.target.value):i=n.target.value,n.target.checked?r.includes(i)?r:r.concat([i]):r.filter(o=>!Pu(o,i))}else return n.target.checked;else{if(e.tagName.toLowerCase()==="select"&&e.multiple)return t.includes("number")?Array.from(n.target.selectedOptions).map(i=>{let o=i.value||i.text;return Nn(o)}):t.includes("boolean")?Array.from(n.target.selectedOptions).map(i=>{let o=i.value||i.text;return nn(o)}):Array.from(n.target.selectedOptions).map(i=>i.value||i.text);{let i;return e.type==="radio"?n.target.checked?i=n.target.value:i=r:i=n.target.value,t.includes("number")?Nn(i):t.includes("boolean")?nn(i):t.includes("trim")?i.trim():i}}})}function Nn(e){let t=e?parseFloat(e):null;return ku(t)?t:e}function Pu(e,t){return e==t}function ku(e){return!Array.isArray(e)&&!isNaN(e)}function fi(e){return e!==null&&typeof e=="object"&&typeof e.get=="function"&&typeof e.set=="function"}Q("cloak",e=>queueMicrotask(()=>ee(()=>e.removeAttribute(xt("cloak")))));go(()=>`[${xt("init")}]`);Q("init",Ke((e,{expression:t},{evaluate:n})=>typeof t=="string"?!!t.trim()&&n(t,{},!1):n(t,{},!1)));Q("text",(e,{expression:t},{effect:n,evaluateLater:r})=>{let i=r(t);n(()=>{i(o=>{ee(()=>{e.textContent=o})})})});Q("html",(e,{expression:t},{effect:n,evaluateLater:r})=>{let i=r(t);n(()=>{i(o=>{ee(()=>{e.innerHTML=o,e._x_ignoreSelf=!0,Ne(e),delete e._x_ignoreSelf})})})});br(io(":",oo(xt("bind:"))));var Go=(e,{value:t,modifiers:n,expression:r,original:i},{effect:o,cleanup:a})=>{if(!t){let c={};Fc(c),ae(e,r)(l=>{Ro(e,l,i)},{scope:c});return}if(t==="key")return Bu(e,r);if(e._x_inlineBindings&&e._x_inlineBindings[t]&&e._x_inlineBindings[t].extract)return;let s=ae(e,r);o(()=>s(c=>{c===void 0&&typeof r=="string"&&r.match(/\./)&&(c=""),ee(()=>Eo(e,t,c,n))})),a(()=>{e._x_undoAddedClasses&&e._x_undoAddedClasses(),e._x_undoAddedStyles&&e._x_undoAddedStyles()})};Go.inline=(e,{value:t,modifiers:n,expression:r})=>{t&&(e._x_inlineBindings||(e._x_inlineBindings={}),e._x_inlineBindings[t]={expression:r,extract:!1})};Q("bind",Go);function Bu(e,t){e._x_keyExpression=t}ho(()=>`[${xt("data")}]`);Q("data",(e,{expression:t},{cleanup:n})=>{if($u(e))return;t=t===""?"{}":t;let r={};Kn(r,e);let i={};Wc(i,r);let o=et(e,t,{scope:i});(o===void 0||o===!0)&&(o={}),Kn(o,e);let a=yt(o);Xi(a);let s=Ht(e,a);a.init&&et(e,a.init),n(()=>{a.destroy&&et(e,a.destroy),s()})});gn((e,t)=>{e._x_dataStack&&(t._x_dataStack=e._x_dataStack,t.setAttribute("data-has-alpine-state",!0))});function $u(e){return Fe?Jn?!0:e.hasAttribute("data-has-alpine-state"):!1}Q("show",(e,{modifiers:t,expression:n},{effect:r})=>{let i=ae(e,n);e._x_doHide||(e._x_doHide=()=>{ee(()=>{e.style.setProperty("display","none",t.includes("important")?"important":void 0)})}),e._x_doShow||(e._x_doShow=()=>{ee(()=>{e.style.length===1&&e.style.display==="none"?e.removeAttribute("style"):e.style.removeProperty("display")})});let o=()=>{e._x_doHide(),e._x_isShown=!1},a=()=>{e._x_doShow(),e._x_isShown=!0},s=()=>setTimeout(a),c=Xn(v=>v?a():o(),v=>{typeof e._x_toggleAndCascadeWithTransitions=="function"?e._x_toggleAndCascadeWithTransitions(e,v,a,o):v?s():o()}),f,l=!0;r(()=>i(v=>{!l&&v===f||(t.includes("immediate")&&(v?s():o()),c(v),f=v,l=!1)}))});Q("for",(e,{expression:t},{effect:n,cleanup:r})=>{let i=Hu(t),o=ae(e,i.items),a=ae(e,e._x_keyExpression||"index");e._x_prevKeys=[],e._x_lookup={},n(()=>ju(e,i,o,a)),r(()=>{Object.values(e._x_lookup).forEach(s=>s.remove()),delete e._x_prevKeys,delete e._x_lookup})});function ju(e,t,n,r){let i=a=>typeof a=="object"&&!Array.isArray(a),o=e;n(a=>{Fu(a)&&a>=0&&(a=Array.from(Array(a).keys(),h=>h+1)),a===void 0&&(a=[]);let s=e._x_lookup,c=e._x_prevKeys,f=[],l=[];if(i(a))a=Object.entries(a).map(([h,E])=>{let O=di(t,E,h,a);r(M=>{l.includes(M)&&ve("Duplicate key on x-for",e),l.push(M)},{scope:{index:h,...O}}),f.push(O)});else for(let h=0;h<a.length;h++){let E=di(t,a[h],h,a);r(O=>{l.includes(O)&&ve("Duplicate key on x-for",e),l.push(O)},{scope:{index:h,...E}}),f.push(E)}let v=[],b=[],_=[],A=[];for(let h=0;h<c.length;h++){let E=c[h];l.indexOf(E)===-1&&_.push(E)}c=c.filter(h=>!_.includes(h));let S="template";for(let h=0;h<l.length;h++){let E=l[h],O=c.indexOf(E);if(O===-1)c.splice(h,0,E),v.push([S,h]);else if(O!==h){let M=c.splice(h,1)[0],u=c.splice(O-1,1)[0];c.splice(h,0,u),c.splice(O,0,M),b.push([M,u])}else A.push(E);S=E}for(let h=0;h<_.length;h++){let E=_[h];s[E]._x_effects&&s[E]._x_effects.forEach($i),s[E].remove(),s[E]=null,delete s[E]}for(let h=0;h<b.length;h++){let[E,O]=b[h],M=s[E],u=s[O],I=document.createElement("div");ee(()=>{u||ve('x-for ":key" is undefined or invalid',o,O,s),u.after(I),M.after(u),u._x_currentIfEl&&u.after(u._x_currentIfEl),I.before(M),M._x_currentIfEl&&M.after(M._x_currentIfEl),I.remove()}),u._x_refreshXForScope(f[l.indexOf(O)])}for(let h=0;h<v.length;h++){let[E,O]=v[h],M=E==="template"?o:s[E];M._x_currentIfEl&&(M=M._x_currentIfEl);let u=f[O],I=l[O],m=document.importNode(o.content,!0).firstElementChild,L=yt(u);Ht(m,L,o),m._x_refreshXForScope=K=>{Object.entries(K).forEach(([P,H])=>{L[P]=H})},ee(()=>{M.after(m),Ke(()=>Ne(m))()}),typeof I=="object"&&ve("x-for key cannot be an object, it must be a string or an integer",o),s[I]=m}for(let h=0;h<A.length;h++)s[A[h]]._x_refreshXForScope(f[l.indexOf(A[h])]);o._x_prevKeys=l})}function Hu(e){let t=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,n=/^\s*\(|\)\s*$/g,r=/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,i=e.match(r);if(!i)return;let o={};o.items=i[2].trim();let a=i[1].replace(n,"").trim(),s=a.match(t);return s?(o.item=a.replace(t,"").trim(),o.index=s[1].trim(),s[2]&&(o.collection=s[2].trim())):o.item=a,o}function di(e,t,n,r){let i={};return/^\[.*\]$/.test(e.item)&&Array.isArray(t)?e.item.replace("[","").replace("]","").split(",").map(a=>a.trim()).forEach((a,s)=>{i[a]=t[s]}):/^\{.*\}$/.test(e.item)&&!Array.isArray(t)&&typeof t=="object"?e.item.replace("{","").replace("}","").split(",").map(a=>a.trim()).forEach(a=>{i[a]=t[a]}):i[e.item]=t,e.index&&(i[e.index]=n),e.collection&&(i[e.collection]=r),i}function Fu(e){return!Array.isArray(e)&&!isNaN(e)}function Xo(){}Xo.inline=(e,{expression:t},{cleanup:n})=>{let r=pn(e);r._x_refs||(r._x_refs={}),r._x_refs[t]=e,n(()=>delete r._x_refs[t])};Q("ref",Xo);Q("if",(e,{expression:t},{effect:n,cleanup:r})=>{e.tagName.toLowerCase()!=="template"&&ve("x-if can only be used on a <template> tag",e);let i=ae(e,t),o=()=>{if(e._x_currentIfEl)return e._x_currentIfEl;let s=e.content.cloneNode(!0).firstElementChild;return Ht(s,{},e),ee(()=>{e.after(s),Ke(()=>Ne(s))()}),e._x_currentIfEl=s,e._x_undoIf=()=>{He(s,c=>{c._x_effects&&c._x_effects.forEach($i)}),s.remove(),delete e._x_currentIfEl},s},a=()=>{e._x_undoIf&&(e._x_undoIf(),delete e._x_undoIf)};n(()=>i(s=>{s?o():a()})),r(()=>e._x_undoIf&&e._x_undoIf())});Q("id",(e,{expression:t},{evaluate:n})=>{n(t).forEach(i=>Tu(e,i))});gn((e,t)=>{e._x_ids&&(t._x_ids=e._x_ids)});br(io("@",oo(xt("on:"))));Q("on",Ke((e,{value:t,modifiers:n,expression:r},{cleanup:i})=>{let o=r?ae(e,r):()=>{};e.tagName.toLowerCase()==="template"&&(e._x_forwardEvents||(e._x_forwardEvents=[]),e._x_forwardEvents.includes(t)||e._x_forwardEvents.push(t));let a=tr(e,t,n,s=>{o(()=>{},{scope:{$event:s},params:[s]})});i(()=>a())}));yn("Collapse","collapse","collapse");yn("Intersect","intersect","intersect");yn("Focus","trap","focus");yn("Mask","mask","mask");function yn(e,t,n){Q(t,r=>ve(`You can't use [x-${t}] without first installing the "${e}" plugin here: https://alpinejs.dev/plugins/${n}`,r))}Wt.setEvaluator(eo);Wt.setReactivityEngine({reactive:Cr,effect:Qc,release:eu,raw:X});var Uu=Wt,Wu=Uu;function Ku(e){return e&&e.__esModule&&Object.prototype.hasOwnProperty.call(e,"default")?e.default:e}function Yo(e){return e instanceof Map?e.clear=e.delete=e.set=function(){throw new Error("map is read-only")}:e instanceof Set&&(e.add=e.clear=e.delete=function(){throw new Error("set is read-only")}),Object.freeze(e),Object.getOwnPropertyNames(e).forEach(t=>{const n=e[t],r=typeof n;(r==="object"||r==="function")&&!Object.isFrozen(n)&&Yo(n)}),e}class pi{constructor(t){t.data===void 0&&(t.data={}),this.data=t.data,this.isMatchIgnored=!1}ignoreMatch(){this.isMatchIgnored=!0}}function Jo(e){return e.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#x27;")}function je(e,...t){const n=Object.create(null);for(const r in e)n[r]=e[r];return t.forEach(function(r){for(const i in r)n[i]=r[i]}),n}const zu="</span>",hi=e=>!!e.scope,Vu=(e,{prefix:t})=>{if(e.startsWith("language:"))return e.replace("language:","language-");if(e.includes(".")){const n=e.split(".");return[`${t}${n.shift()}`,...n.map((r,i)=>`${r}${"_".repeat(i+1)}`)].join(" ")}return`${t}${e}`};class qu{constructor(t,n){this.buffer="",this.classPrefix=n.classPrefix,t.walk(this)}addText(t){this.buffer+=Jo(t)}openNode(t){if(!hi(t))return;const n=Vu(t.scope,{prefix:this.classPrefix});this.span(n)}closeNode(t){hi(t)&&(this.buffer+=zu)}value(){return this.buffer}span(t){this.buffer+=`<span class="${t}">`}}const gi=(e={})=>{const t={children:[]};return Object.assign(t,e),t};class Rr{constructor(){this.rootNode=gi(),this.stack=[this.rootNode]}get top(){return this.stack[this.stack.length-1]}get root(){return this.rootNode}add(t){this.top.children.push(t)}openNode(t){const n=gi({scope:t});this.add(n),this.stack.push(n)}closeNode(){if(this.stack.length>1)return this.stack.pop()}closeAllNodes(){for(;this.closeNode(););}toJSON(){return JSON.stringify(this.rootNode,null,4)}walk(t){return this.constructor._walk(t,this.rootNode)}static _walk(t,n){return typeof n=="string"?t.addText(n):n.children&&(t.openNode(n),n.children.forEach(r=>this._walk(t,r)),t.closeNode(n)),t}static _collapse(t){typeof t!="string"&&t.children&&(t.children.every(n=>typeof n=="string")?t.children=[t.children.join("")]:t.children.forEach(n=>{Rr._collapse(n)}))}}class Gu extends Rr{constructor(t){super(),this.options=t}addText(t){t!==""&&this.add(t)}startScope(t){this.openNode(t)}endScope(){this.closeNode()}__addSublanguage(t,n){const r=t.root;n&&(r.scope=`language:${n}`),this.add(r)}toHTML(){return new qu(this,this.options).value()}finalize(){return this.closeAllNodes(),!0}}function Pt(e){return e?typeof e=="string"?e:e.source:null}function Zo(e){return at("(?=",e,")")}function Xu(e){return at("(?:",e,")*")}function Yu(e){return at("(?:",e,")?")}function at(...e){return e.map(n=>Pt(n)).join("")}function Ju(e){const t=e[e.length-1];return typeof t=="object"&&t.constructor===Object?(e.splice(e.length-1,1),t):{}}function Ir(...e){return"("+(Ju(e).capture?"":"?:")+e.map(r=>Pt(r)).join("|")+")"}function Qo(e){return new RegExp(e.toString()+"|").exec("").length-1}function Zu(e,t){const n=e&&e.exec(t);return n&&n.index===0}const Qu=/\[(?:[^\\\]]|\\.)*\]|\(\??|\\([1-9][0-9]*)|\\./;function Dr(e,{joinWith:t}){let n=0;return e.map(r=>{n+=1;const i=n;let o=Pt(r),a="";for(;o.length>0;){const s=Qu.exec(o);if(!s){a+=o;break}a+=o.substring(0,s.index),o=o.substring(s.index+s[0].length),s[0][0]==="\\"&&s[1]?a+="\\"+String(Number(s[1])+i):(a+=s[0],s[0]==="("&&n++)}return a}).map(r=>`(${r})`).join(t)}const el=/\b\B/,ea="[a-zA-Z]\\w*",Nr="[a-zA-Z_]\\w*",ta="\\b\\d+(\\.\\d+)?",na="(-?)(\\b0[xX][a-fA-F0-9]+|(\\b\\d+(\\.\\d*)?|\\.\\d+)([eE][-+]?\\d+)?)",ra="\\b(0b[01]+)",tl="!|!=|!==|%|%=|&|&&|&=|\\*|\\*=|\\+|\\+=|,|-|-=|/=|/|:|;|<<|<<=|<=|<|===|==|=|>>>=|>>=|>=|>>>|>>|>|\\?|\\[|\\{|\\(|\\^|\\^=|\\||\\|=|\\|\\||~",nl=(e={})=>{const t=/^#![ ]*\//;return e.binary&&(e.begin=at(t,/.*\b/,e.binary,/\b.*/)),je({scope:"meta",begin:t,end:/$/,relevance:0,"on:begin":(n,r)=>{n.index!==0&&r.ignoreMatch()}},e)},kt={begin:"\\\\[\\s\\S]",relevance:0},rl={scope:"string",begin:"'",end:"'",illegal:"\\n",contains:[kt]},il={scope:"string",begin:'"',end:'"',illegal:"\\n",contains:[kt]},ol={begin:/\b(a|an|the|are|I'm|isn't|don't|doesn't|won't|but|just|should|pretty|simply|enough|gonna|going|wtf|so|such|will|you|your|they|like|more)\b/},mn=function(e,t,n={}){const r=je({scope:"comment",begin:e,end:t,contains:[]},n);r.contains.push({scope:"doctag",begin:"[ ]*(?=(TODO|FIXME|NOTE|BUG|OPTIMIZE|HACK|XXX):)",end:/(TODO|FIXME|NOTE|BUG|OPTIMIZE|HACK|XXX):/,excludeBegin:!0,relevance:0});const i=Ir("I","a","is","so","us","to","at","if","in","it","on",/[A-Za-z]+['](d|ve|re|ll|t|s|n)/,/[A-Za-z]+[-][a-z]+/,/[A-Za-z][a-z]{2,}/);return r.contains.push({begin:at(/[ ]+/,"(",i,/[.]?[:]?([.][ ]|[ ])/,"){3}")}),r},al=mn("//","$"),sl=mn("/\\*","\\*/"),cl=mn("#","$"),ul={scope:"number",begin:ta,relevance:0},ll={scope:"number",begin:na,relevance:0},fl={scope:"number",begin:ra,relevance:0},dl={scope:"regexp",begin:/\/(?=[^/\n]*\/)/,end:/\/[gimuy]*/,contains:[kt,{begin:/\[/,end:/\]/,relevance:0,contains:[kt]}]},pl={scope:"title",begin:ea,relevance:0},hl={scope:"title",begin:Nr,relevance:0},gl={begin:"\\.\\s*"+Nr,relevance:0},vl=function(e){return Object.assign(e,{"on:begin":(t,n)=>{n.data._beginMatch=t[1]},"on:end":(t,n)=>{n.data._beginMatch!==t[1]&&n.ignoreMatch()}})};var Qt=Object.freeze({__proto__:null,APOS_STRING_MODE:rl,BACKSLASH_ESCAPE:kt,BINARY_NUMBER_MODE:fl,BINARY_NUMBER_RE:ra,COMMENT:mn,C_BLOCK_COMMENT_MODE:sl,C_LINE_COMMENT_MODE:al,C_NUMBER_MODE:ll,C_NUMBER_RE:na,END_SAME_AS_BEGIN:vl,HASH_COMMENT_MODE:cl,IDENT_RE:ea,MATCH_NOTHING_RE:el,METHOD_GUARD:gl,NUMBER_MODE:ul,NUMBER_RE:ta,PHRASAL_WORDS_MODE:ol,QUOTE_STRING_MODE:il,REGEXP_MODE:dl,RE_STARTERS_RE:tl,SHEBANG:nl,TITLE_MODE:pl,UNDERSCORE_IDENT_RE:Nr,UNDERSCORE_TITLE_MODE:hl});function _l(e,t){e.input[e.index-1]==="."&&t.ignoreMatch()}function bl(e,t){e.className!==void 0&&(e.scope=e.className,delete e.className)}function yl(e,t){t&&e.beginKeywords&&(e.begin="\\b("+e.beginKeywords.split(" ").join("|")+")(?!\\.)(?=\\b|\\s)",e.__beforeBegin=_l,e.keywords=e.keywords||e.beginKeywords,delete e.beginKeywords,e.relevance===void 0&&(e.relevance=0))}function ml(e,t){Array.isArray(e.illegal)&&(e.illegal=Ir(...e.illegal))}function xl(e,t){if(e.match){if(e.begin||e.end)throw new Error("begin & end are not supported with match");e.begin=e.match,delete e.match}}function El(e,t){e.relevance===void 0&&(e.relevance=1)}const wl=(e,t)=>{if(!e.beforeMatch)return;if(e.starts)throw new Error("beforeMatch cannot be used with starts");const n=Object.assign({},e);Object.keys(e).forEach(r=>{delete e[r]}),e.keywords=n.keywords,e.begin=at(n.beforeMatch,Zo(n.begin)),e.starts={relevance:0,contains:[Object.assign(n,{endsParent:!0})]},e.relevance=0,delete n.beforeMatch},Ol=["of","and","for","in","not","or","if","then","parent","list","value"],Al="keyword";function ia(e,t,n=Al){const r=Object.create(null);return typeof e=="string"?i(n,e.split(" ")):Array.isArray(e)?i(n,e):Object.keys(e).forEach(function(o){Object.assign(r,ia(e[o],t,o))}),r;function i(o,a){t&&(a=a.map(s=>s.toLowerCase())),a.forEach(function(s){const c=s.split("|");r[c[0]]=[o,Sl(c[0],c[1])]})}}function Sl(e,t){return t?Number(t):Tl(e)?0:1}function Tl(e){return Ol.includes(e.toLowerCase())}const vi={},rt=e=>{console.error(e)},_i=(e,...t)=>{console.log(`WARN: ${e}`,...t)},lt=(e,t)=>{vi[`${e}/${t}`]||(console.log(`Deprecated as of ${e}. ${t}`),vi[`${e}/${t}`]=!0)},ln=new Error;function oa(e,t,{key:n}){let r=0;const i=e[n],o={},a={};for(let s=1;s<=t.length;s++)a[s+r]=i[s],o[s+r]=!0,r+=Qo(t[s-1]);e[n]=a,e[n]._emit=o,e[n]._multi=!0}function Ml(e){if(Array.isArray(e.begin)){if(e.skip||e.excludeBegin||e.returnBegin)throw rt("skip, excludeBegin, returnBegin not compatible with beginScope: {}"),ln;if(typeof e.beginScope!="object"||e.beginScope===null)throw rt("beginScope must be object"),ln;oa(e,e.begin,{key:"beginScope"}),e.begin=Dr(e.begin,{joinWith:""})}}function Cl(e){if(Array.isArray(e.end)){if(e.skip||e.excludeEnd||e.returnEnd)throw rt("skip, excludeEnd, returnEnd not compatible with endScope: {}"),ln;if(typeof e.endScope!="object"||e.endScope===null)throw rt("endScope must be object"),ln;oa(e,e.end,{key:"endScope"}),e.end=Dr(e.end,{joinWith:""})}}function Rl(e){e.scope&&typeof e.scope=="object"&&e.scope!==null&&(e.beginScope=e.scope,delete e.scope)}function Il(e){Rl(e),typeof e.beginScope=="string"&&(e.beginScope={_wrap:e.beginScope}),typeof e.endScope=="string"&&(e.endScope={_wrap:e.endScope}),Ml(e),Cl(e)}function Dl(e){function t(a,s){return new RegExp(Pt(a),"m"+(e.case_insensitive?"i":"")+(e.unicodeRegex?"u":"")+(s?"g":""))}class n{constructor(){this.matchIndexes={},this.regexes=[],this.matchAt=1,this.position=0}addRule(s,c){c.position=this.position++,this.matchIndexes[this.matchAt]=c,this.regexes.push([c,s]),this.matchAt+=Qo(s)+1}compile(){this.regexes.length===0&&(this.exec=()=>null);const s=this.regexes.map(c=>c[1]);this.matcherRe=t(Dr(s,{joinWith:"|"}),!0),this.lastIndex=0}exec(s){this.matcherRe.lastIndex=this.lastIndex;const c=this.matcherRe.exec(s);if(!c)return null;const f=c.findIndex((v,b)=>b>0&&v!==void 0),l=this.matchIndexes[f];return c.splice(0,f),Object.assign(c,l)}}class r{constructor(){this.rules=[],this.multiRegexes=[],this.count=0,this.lastIndex=0,this.regexIndex=0}getMatcher(s){if(this.multiRegexes[s])return this.multiRegexes[s];const c=new n;return this.rules.slice(s).forEach(([f,l])=>c.addRule(f,l)),c.compile(),this.multiRegexes[s]=c,c}resumingScanAtSamePosition(){return this.regexIndex!==0}considerAll(){this.regexIndex=0}addRule(s,c){this.rules.push([s,c]),c.type==="begin"&&this.count++}exec(s){const c=this.getMatcher(this.regexIndex);c.lastIndex=this.lastIndex;let f=c.exec(s);if(this.resumingScanAtSamePosition()&&!(f&&f.index===this.lastIndex)){const l=this.getMatcher(0);l.lastIndex=this.lastIndex+1,f=l.exec(s)}return f&&(this.regexIndex+=f.position+1,this.regexIndex===this.count&&this.considerAll()),f}}function i(a){const s=new r;return a.contains.forEach(c=>s.addRule(c.begin,{rule:c,type:"begin"})),a.terminatorEnd&&s.addRule(a.terminatorEnd,{type:"end"}),a.illegal&&s.addRule(a.illegal,{type:"illegal"}),s}function o(a,s){const c=a;if(a.isCompiled)return c;[bl,xl,Il,wl].forEach(l=>l(a,s)),e.compilerExtensions.forEach(l=>l(a,s)),a.__beforeBegin=null,[yl,ml,El].forEach(l=>l(a,s)),a.isCompiled=!0;let f=null;return typeof a.keywords=="object"&&a.keywords.$pattern&&(a.keywords=Object.assign({},a.keywords),f=a.keywords.$pattern,delete a.keywords.$pattern),f=f||/\w+/,a.keywords&&(a.keywords=ia(a.keywords,e.case_insensitive)),c.keywordPatternRe=t(f,!0),s&&(a.begin||(a.begin=/\B|\b/),c.beginRe=t(c.begin),!a.end&&!a.endsWithParent&&(a.end=/\B|\b/),a.end&&(c.endRe=t(c.end)),c.terminatorEnd=Pt(c.end)||"",a.endsWithParent&&s.terminatorEnd&&(c.terminatorEnd+=(a.end?"|":"")+s.terminatorEnd)),a.illegal&&(c.illegalRe=t(a.illegal)),a.contains||(a.contains=[]),a.contains=[].concat(...a.contains.map(function(l){return Nl(l==="self"?a:l)})),a.contains.forEach(function(l){o(l,c)}),a.starts&&o(a.starts,s),c.matcher=i(c),c}if(e.compilerExtensions||(e.compilerExtensions=[]),e.contains&&e.contains.includes("self"))throw new Error("ERR: contains `self` is not supported at the top-level of a language.  See documentation.");return e.classNameAliases=je(e.classNameAliases||{}),o(e)}function aa(e){return e?e.endsWithParent||aa(e.starts):!1}function Nl(e){return e.variants&&!e.cachedVariants&&(e.cachedVariants=e.variants.map(function(t){return je(e,{variants:null},t)})),e.cachedVariants?e.cachedVariants:aa(e)?je(e,{starts:e.starts?je(e.starts):null}):Object.isFrozen(e)?je(e):e}var Ll="11.9.0";class Pl extends Error{constructor(t,n){super(t),this.name="HTMLInjectionError",this.html=n}}const Ln=Jo,bi=je,yi=Symbol("nomatch"),kl=7,sa=function(e){const t=Object.create(null),n=Object.create(null),r=[];let i=!0;const o="Could not find the language '{}', did you forget to load/include a language module?",a={disableAutodetect:!0,name:"Plain text",contains:[]};let s={ignoreUnescapedHTML:!1,throwUnescapedHTML:!1,noHighlightRe:/^(no-?highlight)$/i,languageDetectRe:/\blang(?:uage)?-([\w-]+)\b/i,classPrefix:"hljs-",cssSelector:"pre code",languages:null,__emitter:Gu};function c(p){return s.noHighlightRe.test(p)}function f(p){let y=p.className+" ";y+=p.parentNode?p.parentNode.className:"";const C=s.languageDetectRe.exec(y);if(C){const N=P(C[1]);return N||(_i(o.replace("{}",C[1])),_i("Falling back to no-highlight mode for this block.",p)),N?C[1]:"no-highlight"}return y.split(/\s+/).find(N=>c(N)||P(N))}function l(p,y,C){let N="",W="";typeof y=="object"?(N=p,C=y.ignoreIllegals,W=y.language):(lt("10.7.0","highlight(lang, code, ...args) has been deprecated."),lt("10.7.0",`Please use highlight(code, options) instead.
https://github.com/highlightjs/highlight.js/issues/2277`),W=p,N=y),C===void 0&&(C=!0);const J={code:N,language:W};Y("before:highlight",J);const re=J.result?J.result:v(J.language,J.code,C);return re.code=J.code,Y("after:highlight",re),re}function v(p,y,C,N){const W=Object.create(null);function J(g,x){return g.keywords[x]}function re(){if(!T.keywords){V.addText($);return}let g=0;T.keywordPatternRe.lastIndex=0;let x=T.keywordPatternRe.exec($),D="";for(;x;){D+=$.substring(g,x.index);const j=ie.case_insensitive?x[0].toLowerCase():x[0],ne=J(T,j);if(ne){const[me,En]=ne;if(V.addText(D),D="",W[j]=(W[j]||0)+1,W[j]<=kl&&(he+=En),me.startsWith("_"))D+=x[0];else{const d=ie.classNameAliases[me]||me;Z(x[0],d)}}else D+=x[0];g=T.keywordPatternRe.lastIndex,x=T.keywordPatternRe.exec($)}D+=$.substring(g),V.addText(D)}function se(){if($==="")return;let g=null;if(typeof T.subLanguage=="string"){if(!t[T.subLanguage]){V.addText($);return}g=v(T.subLanguage,$,!0,pe[T.subLanguage]),pe[T.subLanguage]=g._top}else g=_($,T.subLanguage.length?T.subLanguage:null);T.relevance>0&&(he+=g.relevance),V.__addSublanguage(g._emitter,g.language)}function G(){T.subLanguage!=null?se():re(),$=""}function Z(g,x){g!==""&&(V.startScope(x),V.addText(g),V.endScope())}function Ce(g,x){let D=1;const j=x.length-1;for(;D<=j;){if(!g._emit[D]){D++;continue}const ne=ie.classNameAliases[g[D]]||g[D],me=x[D];ne?Z(me,ne):($=me,re(),$=""),D++}}function de(g,x){return g.scope&&typeof g.scope=="string"&&V.openNode(ie.classNameAliases[g.scope]||g.scope),g.beginScope&&(g.beginScope._wrap?(Z($,ie.classNameAliases[g.beginScope._wrap]||g.beginScope._wrap),$=""):g.beginScope._multi&&(Ce(g.beginScope,x),$="")),T=Object.create(g,{parent:{value:T}}),T}function Re(g,x,D){let j=Zu(g.endRe,D);if(j){if(g["on:end"]){const ne=new pi(g);g["on:end"](x,ne),ne.isMatchIgnored&&(j=!1)}if(j){for(;g.endsParent&&g.parent;)g=g.parent;return g}}if(g.endsWithParent)return Re(g.parent,x,D)}function Oe(g){return T.matcher.regexIndex===0?($+=g[0],1):(Be=!0,0)}function Le(g){const x=g[0],D=g.rule,j=new pi(D),ne=[D.__beforeBegin,D["on:begin"]];for(const me of ne)if(me&&(me(g,j),j.isMatchIgnored))return Oe(x);return D.skip?$+=x:(D.excludeBegin&&($+=x),G(),!D.returnBegin&&!D.excludeBegin&&($=x)),de(D,g),D.returnBegin?0:x.length}function st(g){const x=g[0],D=y.substring(g.index),j=Re(T,g,D);if(!j)return yi;const ne=T;T.endScope&&T.endScope._wrap?(G(),Z(x,T.endScope._wrap)):T.endScope&&T.endScope._multi?(G(),Ce(T.endScope,g)):ne.skip?$+=x:(ne.returnEnd||ne.excludeEnd||($+=x),G(),ne.excludeEnd&&($=x));do T.scope&&V.closeNode(),!T.skip&&!T.subLanguage&&(he+=T.relevance),T=T.parent;while(T!==j.parent);return j.starts&&de(j.starts,g),ne.returnEnd?0:x.length}function ze(){const g=[];for(let x=T;x!==ie;x=x.parent)x.scope&&g.unshift(x.scope);g.forEach(x=>V.openNode(x))}let Ie={};function Ve(g,x){const D=x&&x[0];if($+=g,D==null)return G(),0;if(Ie.type==="begin"&&x.type==="end"&&Ie.index===x.index&&D===""){if($+=y.slice(x.index,x.index+1),!i){const j=new Error(`0 width match regex (${p})`);throw j.languageName=p,j.badRule=Ie.rule,j}return 1}if(Ie=x,x.type==="begin")return Le(x);if(x.type==="illegal"&&!C){const j=new Error('Illegal lexeme "'+D+'" for mode "'+(T.scope||"<unnamed>")+'"');throw j.mode=T,j}else if(x.type==="end"){const j=st(x);if(j!==yi)return j}if(x.type==="illegal"&&D==="")return 1;if(ke>1e5&&ke>x.index*3)throw new Error("potential infinite loop, way more iterations than matches");return $+=D,D.length}const ie=P(p);if(!ie)throw rt(o.replace("{}",p)),new Error('Unknown language: "'+p+'"');const qe=Dl(ie);let Pe="",T=N||qe;const pe={},V=new s.__emitter(s);ze();let $="",he=0,le=0,ke=0,Be=!1;try{if(ie.__emitTokens)ie.__emitTokens(y,V);else{for(T.matcher.considerAll();;){ke++,Be?Be=!1:T.matcher.considerAll(),T.matcher.lastIndex=le;const g=T.matcher.exec(y);if(!g)break;const x=y.substring(le,g.index),D=Ve(x,g);le=g.index+D}Ve(y.substring(le))}return V.finalize(),Pe=V.toHTML(),{language:p,value:Pe,relevance:he,illegal:!1,_emitter:V,_top:T}}catch(g){if(g.message&&g.message.includes("Illegal"))return{language:p,value:Ln(y),illegal:!0,relevance:0,_illegalBy:{message:g.message,index:le,context:y.slice(le-100,le+100),mode:g.mode,resultSoFar:Pe},_emitter:V};if(i)return{language:p,value:Ln(y),illegal:!1,relevance:0,errorRaised:g,_emitter:V,_top:T};throw g}}function b(p){const y={value:Ln(p),illegal:!1,relevance:0,_top:a,_emitter:new s.__emitter(s)};return y._emitter.addText(p),y}function _(p,y){y=y||s.languages||Object.keys(t);const C=b(p),N=y.filter(P).filter(q).map(G=>v(G,p,!1));N.unshift(C);const W=N.sort((G,Z)=>{if(G.relevance!==Z.relevance)return Z.relevance-G.relevance;if(G.language&&Z.language){if(P(G.language).supersetOf===Z.language)return 1;if(P(Z.language).supersetOf===G.language)return-1}return 0}),[J,re]=W,se=J;return se.secondBest=re,se}function A(p,y,C){const N=y&&n[y]||C;p.classList.add("hljs"),p.classList.add(`language-${N}`)}function S(p){let y=null;const C=f(p);if(c(C))return;if(Y("before:highlightElement",{el:p,language:C}),p.dataset.highlighted){console.log("Element previously highlighted. To highlight again, first unset `dataset.highlighted`.",p);return}if(p.children.length>0&&(s.ignoreUnescapedHTML||(console.warn("One of your code blocks includes unescaped HTML. This is a potentially serious security risk."),console.warn("https://github.com/highlightjs/highlight.js/wiki/security"),console.warn("The element with unescaped HTML:"),console.warn(p)),s.throwUnescapedHTML))throw new Pl("One of your code blocks includes unescaped HTML.",p.innerHTML);y=p;const N=y.textContent,W=C?l(N,{language:C,ignoreIllegals:!0}):_(N);p.innerHTML=W.value,p.dataset.highlighted="yes",A(p,C,W.language),p.result={language:W.language,re:W.relevance,relevance:W.relevance},W.secondBest&&(p.secondBest={language:W.secondBest.language,relevance:W.secondBest.relevance}),Y("after:highlightElement",{el:p,result:W,text:N})}function h(p){s=bi(s,p)}const E=()=>{u(),lt("10.6.0","initHighlighting() deprecated.  Use highlightAll() now.")};function O(){u(),lt("10.6.0","initHighlightingOnLoad() deprecated.  Use highlightAll() now.")}let M=!1;function u(){if(document.readyState==="loading"){M=!0;return}document.querySelectorAll(s.cssSelector).forEach(S)}function I(){M&&u()}typeof window<"u"&&window.addEventListener&&window.addEventListener("DOMContentLoaded",I,!1);function m(p,y){let C=null;try{C=y(e)}catch(N){if(rt("Language definition for '{}' could not be registered.".replace("{}",p)),i)rt(N);else throw N;C=a}C.name||(C.name=p),t[p]=C,C.rawDefinition=y.bind(null,e),C.aliases&&H(C.aliases,{languageName:p})}function L(p){delete t[p];for(const y of Object.keys(n))n[y]===p&&delete n[y]}function K(){return Object.keys(t)}function P(p){return p=(p||"").toLowerCase(),t[p]||t[n[p]]}function H(p,{languageName:y}){typeof p=="string"&&(p=[p]),p.forEach(C=>{n[C.toLowerCase()]=y})}function q(p){const y=P(p);return y&&!y.disableAutodetect}function z(p){p["before:highlightBlock"]&&!p["before:highlightElement"]&&(p["before:highlightElement"]=y=>{p["before:highlightBlock"](Object.assign({block:y.el},y))}),p["after:highlightBlock"]&&!p["after:highlightElement"]&&(p["after:highlightElement"]=y=>{p["after:highlightBlock"](Object.assign({block:y.el},y))})}function k(p){z(p),r.push(p)}function U(p){const y=r.indexOf(p);y!==-1&&r.splice(y,1)}function Y(p,y){const C=p;r.forEach(function(N){N[C]&&N[C](y)})}function te(p){return lt("10.7.0","highlightBlock will be removed entirely in v12.0"),lt("10.7.0","Please use highlightElement now."),S(p)}Object.assign(e,{highlight:l,highlightAuto:_,highlightAll:u,highlightElement:S,highlightBlock:te,configure:h,initHighlighting:E,initHighlightingOnLoad:O,registerLanguage:m,unregisterLanguage:L,listLanguages:K,getLanguage:P,registerAliases:H,autoDetection:q,inherit:bi,addPlugin:k,removePlugin:U}),e.debugMode=function(){i=!1},e.safeMode=function(){i=!0},e.versionString=Ll,e.regex={concat:at,lookahead:Zo,either:Ir,optional:Yu,anyNumberOfTimes:Xu};for(const p in Qt)typeof Qt[p]=="object"&&Yo(Qt[p]);return Object.assign(e,Qt),e},bt=sa({});bt.newInstance=()=>sa({});var Bl=bt;bt.HighlightJS=bt;bt.default=bt;const xn=Ku(Bl);function $l(e){const t=e.regex,n=/(?![A-Za-z0-9])(?![$])/,r=t.concat(/[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/,n),i=t.concat(/(\\?[A-Z][a-z0-9_\x7f-\xff]+|\\?[A-Z]+(?=[A-Z][a-z0-9_\x7f-\xff])){1,}/,n),o={scope:"variable",match:"\\$+"+r},a={scope:"meta",variants:[{begin:/<\?php/,relevance:10},{begin:/<\?=/},{begin:/<\?/,relevance:.1},{begin:/\?>/}]},s={scope:"subst",variants:[{begin:/\$\w+/},{begin:/\{\$/,end:/\}/}]},c=e.inherit(e.APOS_STRING_MODE,{illegal:null}),f=e.inherit(e.QUOTE_STRING_MODE,{illegal:null,contains:e.QUOTE_STRING_MODE.contains.concat(s)}),l={begin:/<<<[ \t]*(?:(\w+)|"(\w+)")\n/,end:/[ \t]*(\w+)\b/,contains:e.QUOTE_STRING_MODE.contains.concat(s),"on:begin":(k,U)=>{U.data._beginMatch=k[1]||k[2]},"on:end":(k,U)=>{U.data._beginMatch!==k[1]&&U.ignoreMatch()}},v=e.END_SAME_AS_BEGIN({begin:/<<<[ \t]*'(\w+)'\n/,end:/[ \t]*(\w+)\b/}),b=`[ 	
]`,_={scope:"string",variants:[f,c,l,v]},A={scope:"number",variants:[{begin:"\\b0[bB][01]+(?:_[01]+)*\\b"},{begin:"\\b0[oO][0-7]+(?:_[0-7]+)*\\b"},{begin:"\\b0[xX][\\da-fA-F]+(?:_[\\da-fA-F]+)*\\b"},{begin:"(?:\\b\\d+(?:_\\d+)*(\\.(?:\\d+(?:_\\d+)*))?|\\B\\.\\d+)(?:[eE][+-]?\\d+)?"}],relevance:0},S=["false","null","true"],h=["__CLASS__","__DIR__","__FILE__","__FUNCTION__","__COMPILER_HALT_OFFSET__","__LINE__","__METHOD__","__NAMESPACE__","__TRAIT__","die","echo","exit","include","include_once","print","require","require_once","array","abstract","and","as","binary","bool","boolean","break","callable","case","catch","class","clone","const","continue","declare","default","do","double","else","elseif","empty","enddeclare","endfor","endforeach","endif","endswitch","endwhile","enum","eval","extends","final","finally","float","for","foreach","from","global","goto","if","implements","instanceof","insteadof","int","integer","interface","isset","iterable","list","match|0","mixed","new","never","object","or","private","protected","public","readonly","real","return","string","switch","throw","trait","try","unset","use","var","void","while","xor","yield"],E=["Error|0","AppendIterator","ArgumentCountError","ArithmeticError","ArrayIterator","ArrayObject","AssertionError","BadFunctionCallException","BadMethodCallException","CachingIterator","CallbackFilterIterator","CompileError","Countable","DirectoryIterator","DivisionByZeroError","DomainException","EmptyIterator","ErrorException","Exception","FilesystemIterator","FilterIterator","GlobIterator","InfiniteIterator","InvalidArgumentException","IteratorIterator","LengthException","LimitIterator","LogicException","MultipleIterator","NoRewindIterator","OutOfBoundsException","OutOfRangeException","OuterIterator","OverflowException","ParentIterator","ParseError","RangeException","RecursiveArrayIterator","RecursiveCachingIterator","RecursiveCallbackFilterIterator","RecursiveDirectoryIterator","RecursiveFilterIterator","RecursiveIterator","RecursiveIteratorIterator","RecursiveRegexIterator","RecursiveTreeIterator","RegexIterator","RuntimeException","SeekableIterator","SplDoublyLinkedList","SplFileInfo","SplFileObject","SplFixedArray","SplHeap","SplMaxHeap","SplMinHeap","SplObjectStorage","SplObserver","SplPriorityQueue","SplQueue","SplStack","SplSubject","SplTempFileObject","TypeError","UnderflowException","UnexpectedValueException","UnhandledMatchError","ArrayAccess","BackedEnum","Closure","Fiber","Generator","Iterator","IteratorAggregate","Serializable","Stringable","Throwable","Traversable","UnitEnum","WeakReference","WeakMap","Directory","__PHP_Incomplete_Class","parent","php_user_filter","self","static","stdClass"],M={keyword:h,literal:(k=>{const U=[];return k.forEach(Y=>{U.push(Y),Y.toLowerCase()===Y?U.push(Y.toUpperCase()):U.push(Y.toLowerCase())}),U})(S),built_in:E},u=k=>k.map(U=>U.replace(/\|\d+$/,"")),I={variants:[{match:[/new/,t.concat(b,"+"),t.concat("(?!",u(E).join("\\b|"),"\\b)"),i],scope:{1:"keyword",4:"title.class"}}]},m=t.concat(r,"\\b(?!\\()"),L={variants:[{match:[t.concat(/::/,t.lookahead(/(?!class\b)/)),m],scope:{2:"variable.constant"}},{match:[/::/,/class/],scope:{2:"variable.language"}},{match:[i,t.concat(/::/,t.lookahead(/(?!class\b)/)),m],scope:{1:"title.class",3:"variable.constant"}},{match:[i,t.concat("::",t.lookahead(/(?!class\b)/))],scope:{1:"title.class"}},{match:[i,/::/,/class/],scope:{1:"title.class",3:"variable.language"}}]},K={scope:"attr",match:t.concat(r,t.lookahead(":"),t.lookahead(/(?!::)/))},P={relevance:0,begin:/\(/,end:/\)/,keywords:M,contains:[K,o,L,e.C_BLOCK_COMMENT_MODE,_,A,I]},H={relevance:0,match:[/\b/,t.concat("(?!fn\\b|function\\b|",u(h).join("\\b|"),"|",u(E).join("\\b|"),"\\b)"),r,t.concat(b,"*"),t.lookahead(/(?=\()/)],scope:{3:"title.function.invoke"},contains:[P]};P.contains.push(H);const q=[K,L,e.C_BLOCK_COMMENT_MODE,_,A,I],z={begin:t.concat(/#\[\s*/,i),beginScope:"meta",end:/]/,endScope:"meta",keywords:{literal:S,keyword:["new","array"]},contains:[{begin:/\[/,end:/]/,keywords:{literal:S,keyword:["new","array"]},contains:["self",...q]},...q,{scope:"meta",match:i}]};return{case_insensitive:!1,keywords:M,contains:[z,e.HASH_COMMENT_MODE,e.COMMENT("//","$"),e.COMMENT("/\\*","\\*/",{contains:[{scope:"doctag",match:"@[A-Za-z]+"}]}),{match:/__halt_compiler\(\);/,keywords:"__halt_compiler",starts:{scope:"comment",end:e.MATCH_NOTHING_RE,contains:[{match:/\?>/,scope:"meta",endsParent:!0}]}},a,{scope:"variable.language",match:/\$this\b/},o,H,L,{match:[/const/,/\s/,r],scope:{1:"keyword",3:"variable.constant"}},I,{scope:"function",relevance:0,beginKeywords:"fn function",end:/[;{]/,excludeEnd:!0,illegal:"[$%\\[]",contains:[{beginKeywords:"use"},e.UNDERSCORE_TITLE_MODE,{begin:"=>",endsParent:!0},{scope:"params",begin:"\\(",end:"\\)",excludeBegin:!0,excludeEnd:!0,keywords:M,contains:["self",o,L,e.C_BLOCK_COMMENT_MODE,_,A]}]},{scope:"class",variants:[{beginKeywords:"enum",illegal:/[($"]/},{beginKeywords:"class interface trait",illegal:/[:($"]/}],relevance:0,end:/\{/,excludeEnd:!0,contains:[{beginKeywords:"extends implements"},e.UNDERSCORE_TITLE_MODE]},{beginKeywords:"namespace",relevance:0,end:";",illegal:/[.']/,contains:[e.inherit(e.UNDERSCORE_TITLE_MODE,{scope:"title.class"})]},{beginKeywords:"use",relevance:0,end:";",contains:[{match:/\b(as|const|function)\b/,scope:"keyword"},e.UNDERSCORE_TITLE_MODE]},_,A]}}Wu.start();xn.registerLanguage("php",$l);window.hljs=xn;xn.highlightElement(document.querySelector(".default-highlightable-code"));document.querySelectorAll(".highlightable-code").forEach(e=>{e.dataset.highlighted!=="yes"&&xn.highlightElement(e)});jt("[data-tippy-content]",{trigger:"click",arrow:!0,theme:"material",animation:"scale"});
</script>

    <script>
        !function(r,o){"use strict";var e,i="hljs-ln",l="hljs-ln-line",h="hljs-ln-code",s="hljs-ln-numbers",c="hljs-ln-n",m="data-line-number",a=/\r\n|\r|\n/g;function u(e){for(var n=e.toString(),t=e.anchorNode;"TD"!==t.nodeName;)t=t.parentNode;for(var r=e.focusNode;"TD"!==r.nodeName;)r=r.parentNode;var o=parseInt(t.dataset.lineNumber),a=parseInt(r.dataset.lineNumber);if(o==a)return n;var i,l=t.textContent,s=r.textContent;for(a<o&&(i=o,o=a,a=i,i=l,l=s,s=i);0!==n.indexOf(l);)l=l.slice(1);for(;-1===n.lastIndexOf(s);)s=s.slice(0,-1);for(var c=l,u=function(e){for(var n=e;"TABLE"!==n.nodeName;)n=n.parentNode;return n}(t),d=o+1;d<a;++d){var f=p('.{0}[{1}="{2}"]',[h,m,d]);c+="\n"+u.querySelector(f).textContent}return c+="\n"+s}function n(e){try{var n=o.querySelectorAll("code.hljs,code.nohighlight");for(var t in n)n.hasOwnProperty(t)&&(n[t].classList.contains("nohljsln")||d(n[t],e))}catch(e){r.console.error("LineNumbers error: ",e)}}function d(e,n){"object"==typeof e&&r.setTimeout(function(){e.innerHTML=f(e,n)},0)}function f(e,n){var t,r,o=(t=e,{singleLine:function(e){return!!e.singleLine&&e.singleLine}(r=(r=n)||{}),startFrom:function(e,n){var t=1;isFinite(n.startFrom)&&(t=n.startFrom);var r=function(e,n){return e.hasAttribute(n)?e.getAttribute(n):null}(e,"data-ln-start-from");return null!==r&&(t=function(e,n){if(!e)return n;var t=Number(e);return isFinite(t)?t:n}(r,1)),t}(t,r)});return function e(n){var t=n.childNodes;for(var r in t){var o;t.hasOwnProperty(r)&&(o=t[r],0<(o.textContent.trim().match(a)||[]).length&&(0<o.childNodes.length?e(o):v(o.parentNode)))}}(e),function(e,n){var t=g(e);""===t[t.length-1].trim()&&t.pop();if(1<t.length||n.singleLine){for(var r="",o=0,a=t.length;o<a;o++)r+=p('<tr><td class="{0} {1}" {3}="{5}"><div class="{2}" {3}="{5}"></div></td><td class="{0} {4}" {3}="{5}">{6}</td></tr>',[l,s,c,m,h,o+n.startFrom,0<t[o].length?t[o]:" "]);return p('<table class="{0}">{1}</table>',[i,r])}return e}(e.innerHTML,o)}function v(e){var n=e.className;if(/hljs-/.test(n)){for(var t=g(e.innerHTML),r=0,o="";r<t.length;r++){o+=p('<span class="{0}">{1}</span>\n',[n,0<t[r].length?t[r]:" "])}e.innerHTML=o.trim()}}function g(e){return 0===e.length?[]:e.split(a)}function p(e,t){return e.replace(/\{(\d+)\}/g,function(e,n){return void 0!==t[n]?t[n]:e})}r.hljs?(r.hljs.initLineNumbersOnLoad=function(e){"interactive"===o.readyState||"complete"===o.readyState?n(e):r.addEventListener("DOMContentLoaded",function(){n(e)})},r.hljs.lineNumbersBlock=d,r.hljs.lineNumbersValue=function(e,n){if("string"!=typeof e)return;var t=document.createElement("code");return t.innerHTML=e,f(t,n)},(e=o.createElement("style")).type="text/css",e.innerHTML=p(".{0}{border-collapse:collapse}.{0} td{padding:0}.{1}:before{content:attr({2})}",[i,c,m]),o.getElementsByTagName("head")[0].appendChild(e)):r.console.error("highlight.js not detected!"),document.addEventListener("copy",function(e){var n,t=window.getSelection();!function(e){for(var n=e;n;){if(n.className&&-1!==n.className.indexOf("hljs-ln-code"))return 1;n=n.parentNode}}(t.anchorNode)||(n=-1!==window.navigator.userAgent.indexOf("Edge")?u(t):t.toString(),e.clipboardData.setData("text/plain",n),e.preventDefault())})}(window,document);

        hljs.initLineNumbersOnLoad()

        window.addEventListener('load', function() {
            document.querySelectorAll('.renderer').forEach(function(element, index) {
                if (index > 0) {
                    element.remove();
                }
            });

            document.querySelector('.default-highlightable-code').style.display = 'block';

            document.querySelectorAll('.highlightable-code').forEach(function(element) {
                element.style.display = 'block';
            })
        });
    </script>
</body>
</html>
