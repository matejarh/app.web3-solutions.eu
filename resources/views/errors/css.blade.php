<style>
/*
! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com
*//*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box; /* 1 */
  border-width: 0; /* 2 */
  border-style: solid; /* 2 */
  border-color: #e5e7eb; /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
  line-height: 1.5; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
  -moz-tab-size: 4; /* 3 */
  -o-tab-size: 4;
     tab-size: 4; /* 3 */
  font-family: Inter, ui-sans-serif, system-ui, -apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; /* 4 */
  font-feature-settings: normal; /* 5 */
  font-variation-settings: normal; /* 6 */
  -webkit-tap-highlight-color: transparent; /* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0; /* 1 */
  line-height: inherit; /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0; /* 1 */
  color: inherit; /* 2 */
  border-top-width: 1px; /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; /* 1 */
  font-feature-settings: normal; /* 2 */
  font-variation-settings: normal; /* 3 */
  font-size: 1em; /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0; /* 1 */
  border-color: inherit; /* 2 */
  border-collapse: collapse; /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-feature-settings: inherit; /* 1 */
  font-variation-settings: inherit; /* 1 */
  font-size: 100%; /* 1 */
  font-weight: inherit; /* 1 */
  line-height: inherit; /* 1 */
  color: inherit; /* 1 */
  margin: 0; /* 2 */
  padding: 0; /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button; /* 1 */
  background-color: transparent; /* 2 */
  background-image: none; /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/
dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1; /* 1 */
  color: #9ca3af; /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1; /* 1 */
  color: #9ca3af; /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/
:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block; /* 1 */
  vertical-align: middle; /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */
[hidden] {
  display: none;
}

[type='text'],input:where(:not([type])),[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  border-radius: 0px;
  padding-top: 0.5rem;
  padding-right: 0.75rem;
  padding-bottom: 0.5rem;
  padding-left: 0.75rem;
  font-size: 1rem;
  line-height: 1.5rem;
  --tw-shadow: 0 0 #0000;
}

[type='text']:focus, input:where(:not([type])):focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: #2563eb;
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  border-color: #2563eb;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #6b7280;
  opacity: 1;
}

input::placeholder,textarea::placeholder {
  color: #6b7280;
  opacity: 1;
}

::-webkit-datetime-edit-fields-wrapper {
  padding: 0;
}

::-webkit-date-and-time-value {
  min-height: 1.5em;
  text-align: inherit;
}

::-webkit-datetime-edit {
  display: inline-flex;
}

::-webkit-datetime-edit,::-webkit-datetime-edit-year-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-meridiem-field {
  padding-top: 0;
  padding-bottom: 0;
}

select {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
  background-position: right 0.5rem center;
  background-repeat: no-repeat;
  background-size: 1.5em 1.5em;
  padding-right: 2.5rem;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
}

[multiple],[size]:where(select:not([size="1"])) {
  background-image: initial;
  background-position: initial;
  background-repeat: unset;
  background-size: initial;
  padding-right: 0.75rem;
  -webkit-print-color-adjust: unset;
          print-color-adjust: unset;
}

[type='checkbox'],[type='radio'] {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  padding: 0;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  flex-shrink: 0;
  height: 1rem;
  width: 1rem;
  color: #2563eb;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  --tw-shadow: 0 0 #0000;
}

[type='checkbox'] {
  border-radius: 0px;
}

[type='radio'] {
  border-radius: 100%;
}

[type='checkbox']:focus,[type='radio']:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
  --tw-ring-offset-width: 2px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: #2563eb;
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
}

[type='checkbox']:checked,[type='radio']:checked {
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

[type='checkbox']:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
}

@media (forced-colors: active)  {

  [type='checkbox']:checked {
    -webkit-appearance: auto;
       -moz-appearance: auto;
            appearance: auto;
  }
}

[type='radio']:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
}

@media (forced-colors: active)  {

  [type='radio']:checked {
    -webkit-appearance: auto;
       -moz-appearance: auto;
            appearance: auto;
  }
}

[type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus {
  border-color: transparent;
  background-color: currentColor;
}

[type='checkbox']:indeterminate {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

@media (forced-colors: active)  {

  [type='checkbox']:indeterminate {
    -webkit-appearance: auto;
       -moz-appearance: auto;
            appearance: auto;
  }
}

[type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus {
  border-color: transparent;
  background-color: currentColor;
}

[type='file'] {
  background: unset;
  border-color: inherit;
  border-width: 0;
  border-radius: 0;
  padding: 0;
  font-size: unset;
  line-height: inherit;
}

[type='file']:focus {
  outline: 1px solid ButtonText;
  outline: 1px auto -webkit-focus-ring-color;
}

* {
  scrollbar-color: initial;
  scrollbar-width: initial;
}

*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}
.prose {
  color: var(--tw-prose-body);
  max-width: 65ch;
}
.prose :where(p):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 1.25em;
  margin-bottom: 1.25em;
}
.prose :where([class~="lead"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-lead);
  font-size: 1.25em;
  line-height: 1.6;
  margin-top: 1.2em;
  margin-bottom: 1.2em;
}
.prose :where(a):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-links);
  text-decoration: underline;
  font-weight: 500;
}
.prose :where(strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-bold);
  font-weight: 600;
}
.prose :where(a strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}
.prose :where(blockquote strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}
.prose :where(thead th strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}
.prose :where(ol):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: decimal;
  margin-top: 1.25em;
  margin-bottom: 1.25em;
  padding-left: 1.625em;
}
.prose :where(ol[type="A"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: upper-alpha;
}
.prose :where(ol[type="a"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: lower-alpha;
}
.prose :where(ol[type="A" s]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: upper-alpha;
}
.prose :where(ol[type="a" s]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: lower-alpha;
}
.prose :where(ol[type="I"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: upper-roman;
}
.prose :where(ol[type="i"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: lower-roman;
}
.prose :where(ol[type="I" s]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: upper-roman;
}
.prose :where(ol[type="i" s]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: lower-roman;
}
.prose :where(ol[type="1"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: decimal;
}
.prose :where(ul):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: disc;
  margin-top: 1.25em;
  margin-bottom: 1.25em;
  padding-left: 1.625em;
}
.prose :where(ol > li):not(:where([class~="not-prose"],[class~="not-prose"] *))::marker {
  font-weight: 400;
  color: var(--tw-prose-counters);
}
.prose :where(ul > li):not(:where([class~="not-prose"],[class~="not-prose"] *))::marker {
  color: var(--tw-prose-bullets);
}
.prose :where(dt):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 600;
  margin-top: 1.25em;
}
.prose :where(hr):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-color: var(--tw-prose-hr);
  border-top-width: 1px;
  margin-top: 3em;
  margin-bottom: 3em;
}
.prose :where(blockquote):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 500;
  font-style: italic;
  color: var(--tw-prose-quotes);
  border-left-width: 0.25rem;
  border-left-color: var(--tw-prose-quote-borders);
  quotes: "\201C""\201D""\2018""\2019";
  margin-top: 1.6em;
  margin-bottom: 1.6em;
  padding-left: 1em;
}
.prose :where(blockquote p:first-of-type):not(:where([class~="not-prose"],[class~="not-prose"] *))::before {
  content: open-quote;
}
.prose :where(blockquote p:last-of-type):not(:where([class~="not-prose"],[class~="not-prose"] *))::after {
  content: close-quote;
}
.prose :where(h1):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 800;
  font-size: 2.25em;
  margin-top: 0;
  margin-bottom: 0.8888889em;
  line-height: 1.1111111;
}
.prose :where(h1 strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 900;
  color: inherit;
}
.prose :where(h2):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 700;
  font-size: 1.5em;
  margin-top: 2em;
  margin-bottom: 1em;
  line-height: 1.3333333;
}
.prose :where(h2 strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 800;
  color: inherit;
}
.prose :where(h3):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 600;
  font-size: 1.25em;
  margin-top: 1.6em;
  margin-bottom: 0.6em;
  line-height: 1.6;
}
.prose :where(h3 strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 700;
  color: inherit;
}
.prose :where(h4):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 600;
  margin-top: 1.5em;
  margin-bottom: 0.5em;
  line-height: 1.5;
}
.prose :where(h4 strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 700;
  color: inherit;
}
.prose :where(img):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 2em;
  margin-bottom: 2em;
}
.prose :where(picture):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  display: block;
  margin-top: 2em;
  margin-bottom: 2em;
}
.prose :where(video):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 2em;
  margin-bottom: 2em;
}
.prose :where(kbd):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 500;
  font-family: inherit;
  color: var(--tw-prose-kbd);
  box-shadow: 0 0 0 1px rgb(var(--tw-prose-kbd-shadows) / 10%), 0 3px 0 rgb(var(--tw-prose-kbd-shadows) / 10%);
  font-size: 0.875em;
  border-radius: 0.3125rem;
  padding-top: 0.1875em;
  padding-right: 0.375em;
  padding-bottom: 0.1875em;
  padding-left: 0.375em;
}
.prose :where(code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-code);
  font-weight: 600;
  font-size: 0.875em;
}
.prose :where(code):not(:where([class~="not-prose"],[class~="not-prose"] *))::before {
  content: "`";
}
.prose :where(code):not(:where([class~="not-prose"],[class~="not-prose"] *))::after {
  content: "`";
}
.prose :where(a code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}
.prose :where(h1 code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}
.prose :where(h2 code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
  font-size: 0.875em;
}
.prose :where(h3 code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
  font-size: 0.9em;
}
.prose :where(h4 code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}
.prose :where(blockquote code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}
.prose :where(thead th code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}
.prose :where(pre):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-pre-code);
  background-color: var(--tw-prose-pre-bg);
  overflow-x: auto;
  font-weight: 400;
  font-size: 0.875em;
  line-height: 1.7142857;
  margin-top: 1.7142857em;
  margin-bottom: 1.7142857em;
  border-radius: 0.375rem;
  padding-top: 0.8571429em;
  padding-right: 1.1428571em;
  padding-bottom: 0.8571429em;
  padding-left: 1.1428571em;
}
.prose :where(pre code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  background-color: transparent;
  border-width: 0;
  border-radius: 0;
  padding: 0;
  font-weight: inherit;
  color: inherit;
  font-size: inherit;
  font-family: inherit;
  line-height: inherit;
}
.prose :where(pre code):not(:where([class~="not-prose"],[class~="not-prose"] *))::before {
  content: none;
}
.prose :where(pre code):not(:where([class~="not-prose"],[class~="not-prose"] *))::after {
  content: none;
}
.prose :where(table):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  width: 100%;
  table-layout: auto;
  text-align: left;
  margin-top: 2em;
  margin-bottom: 2em;
  font-size: 0.875em;
  line-height: 1.7142857;
}
.prose :where(thead):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-bottom-width: 1px;
  border-bottom-color: var(--tw-prose-th-borders);
}
.prose :where(thead th):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 600;
  vertical-align: bottom;
  padding-right: 0.5714286em;
  padding-bottom: 0.5714286em;
  padding-left: 0.5714286em;
}
.prose :where(tbody tr):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-bottom-width: 1px;
  border-bottom-color: var(--tw-prose-td-borders);
}
.prose :where(tbody tr:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-bottom-width: 0;
}
.prose :where(tbody td):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  vertical-align: baseline;
}
.prose :where(tfoot):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-top-width: 1px;
  border-top-color: var(--tw-prose-th-borders);
}
.prose :where(tfoot td):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  vertical-align: top;
}
.prose :where(figure > *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
  margin-bottom: 0;
}
.prose :where(figcaption):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-captions);
  font-size: 0.875em;
  line-height: 1.4285714;
  margin-top: 0.8571429em;
}
.prose {
  --tw-prose-body: #374151;
  --tw-prose-headings: #111827;
  --tw-prose-lead: #4b5563;
  --tw-prose-links: #111827;
  --tw-prose-bold: #111827;
  --tw-prose-counters: #6b7280;
  --tw-prose-bullets: #d1d5db;
  --tw-prose-hr: #e5e7eb;
  --tw-prose-quotes: #111827;
  --tw-prose-quote-borders: #e5e7eb;
  --tw-prose-captions: #6b7280;
  --tw-prose-kbd: #111827;
  --tw-prose-kbd-shadows: 17 24 39;
  --tw-prose-code: #111827;
  --tw-prose-pre-code: #e5e7eb;
  --tw-prose-pre-bg: #1f2937;
  --tw-prose-th-borders: #d1d5db;
  --tw-prose-td-borders: #e5e7eb;
  --tw-prose-invert-body: #d1d5db;
  --tw-prose-invert-headings: #fff;
  --tw-prose-invert-lead: #9ca3af;
  --tw-prose-invert-links: #fff;
  --tw-prose-invert-bold: #fff;
  --tw-prose-invert-counters: #9ca3af;
  --tw-prose-invert-bullets: #4b5563;
  --tw-prose-invert-hr: #374151;
  --tw-prose-invert-quotes: #f3f4f6;
  --tw-prose-invert-quote-borders: #374151;
  --tw-prose-invert-captions: #9ca3af;
  --tw-prose-invert-kbd: #fff;
  --tw-prose-invert-kbd-shadows: 255 255 255;
  --tw-prose-invert-code: #fff;
  --tw-prose-invert-pre-code: #d1d5db;
  --tw-prose-invert-pre-bg: rgb(0 0 0 / 50%);
  --tw-prose-invert-th-borders: #4b5563;
  --tw-prose-invert-td-borders: #374151;
  font-size: 1rem;
  line-height: 1.75;
}
.prose :where(picture > img):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
  margin-bottom: 0;
}
.prose :where(li):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0.5em;
  margin-bottom: 0.5em;
}
.prose :where(ol > li):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-left: 0.375em;
}
.prose :where(ul > li):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-left: 0.375em;
}
.prose :where(.prose > ul > li p):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0.75em;
  margin-bottom: 0.75em;
}
.prose :where(.prose > ul > li > *:first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 1.25em;
}
.prose :where(.prose > ul > li > *:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-bottom: 1.25em;
}
.prose :where(.prose > ol > li > *:first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 1.25em;
}
.prose :where(.prose > ol > li > *:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-bottom: 1.25em;
}
.prose :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0.75em;
  margin-bottom: 0.75em;
}
.prose :where(dl):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 1.25em;
  margin-bottom: 1.25em;
}
.prose :where(dd):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0.5em;
  padding-left: 1.625em;
}
.prose :where(hr + *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}
.prose :where(h2 + *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}
.prose :where(h3 + *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}
.prose :where(h4 + *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}
.prose :where(thead th:first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-left: 0;
}
.prose :where(thead th:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-right: 0;
}
.prose :where(tbody td, tfoot td):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-top: 0.5714286em;
  padding-right: 0.5714286em;
  padding-bottom: 0.5714286em;
  padding-left: 0.5714286em;
}
.prose :where(tbody td:first-child, tfoot td:first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-left: 0;
}
.prose :where(tbody td:last-child, tfoot td:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-right: 0;
}
.prose :where(figure):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 2em;
  margin-bottom: 2em;
}
.prose :where(.prose > :first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}
.prose :where(.prose > :last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-bottom: 0;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}
.pointer-events-none {
  pointer-events: none;
}
.invisible {
  visibility: hidden;
}
.fixed {
  position: fixed;
}
.absolute {
  position: absolute;
}
.relative {
  position: relative;
}
.sticky {
  position: sticky;
}
.inset-0 {
  inset: 0px;
}
.inset-y-0 {
  top: 0px;
  bottom: 0px;
}
.-bottom-16 {
  bottom: -4rem;
}
.-left-16 {
  left: -4rem;
}
.-left-20 {
  left: -5rem;
}
.-top-10 {
  top: -2.5rem;
}
.bottom-0 {
  bottom: 0px;
}
.bottom-2 {
  bottom: 0.5rem;
}
.end-0 {
  inset-inline-end: 0px;
}
.left-0 {
  left: 0px;
}
.left-1\/2 {
  left: 50%;
}
.right-0 {
  right: 0px;
}
.right-5 {
  right: 1.25rem;
}
.right-6 {
  right: 1.5rem;
}
.start-0 {
  inset-inline-start: 0px;
}
.top-0 {
  top: 0px;
}
.top-5 {
  top: 1.25rem;
}
.z-0 {
  z-index: 0;
}
.z-10 {
  z-index: 10;
}
.z-20 {
  z-index: 20;
}
.z-30 {
  z-index: 30;
}
.z-40 {
  z-index: 40;
}
.z-50 {
  z-index: 50;
}
.order-1 {
  order: 1;
}
.order-2 {
  order: 2;
}
.col-span-6 {
  grid-column: span 6 / span 6;
}
.\!row-span-1 {
  grid-row: span 1 / span 1 !important;
}
.m-0 {
  margin: 0px;
}
.-mx-1 {
  margin-left: -0.25rem;
  margin-right: -0.25rem;
}
.-mx-1\.5 {
  margin-left: -0.375rem;
  margin-right: -0.375rem;
}
.-mx-3 {
  margin-left: -0.75rem;
  margin-right: -0.75rem;
}
.-my-1 {
  margin-top: -0.25rem;
  margin-bottom: -0.25rem;
}
.-my-1\.5 {
  margin-top: -0.375rem;
  margin-bottom: -0.375rem;
}
.mx-3 {
  margin-left: 0.75rem;
  margin-right: 0.75rem;
}
.mx-auto {
  margin-left: auto;
  margin-right: auto;
}
.my-4 {
  margin-top: 1rem;
  margin-bottom: 1rem;
}
.my-6 {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}
.my-auto {
  margin-top: auto;
  margin-bottom: auto;
}
.-me-0 {
  margin-inline-end: -0px;
}
.-me-0\.5 {
  margin-inline-end: -0.125rem;
}
.-me-1 {
  margin-inline-end: -0.25rem;
}
.-me-2 {
  margin-inline-end: -0.5rem;
}
.-ml-px {
  margin-left: -1px;
}
.-mr-1 {
  margin-right: -0.25rem;
}
.-mt-5 {
  margin-top: -1.25rem;
}
.-mt-px {
  margin-top: -1px;
}
.mb-1 {
  margin-bottom: 0.25rem;
}
.mb-1\.5 {
  margin-bottom: 0.375rem;
}
.mb-2 {
  margin-bottom: 0.5rem;
}
.mb-4 {
  margin-bottom: 1rem;
}
.mb-6 {
  margin-bottom: 1.5rem;
}
.mb-8 {
  margin-bottom: 2rem;
}
.me-2 {
  margin-inline-end: 0.5rem;
}
.me-3 {
  margin-inline-end: 0.75rem;
}
.ml-1 {
  margin-left: 0.25rem;
}
.ml-12 {
  margin-left: 3rem;
}
.ml-2 {
  margin-left: 0.5rem;
}
.ml-3 {
  margin-left: 0.75rem;
}
.ml-4 {
  margin-left: 1rem;
}
.ml-6 {
  margin-left: 1.5rem;
}
.mr-1 {
  margin-right: 0.25rem;
}
.mr-2 {
  margin-right: 0.5rem;
}
.mr-3 {
  margin-right: 0.75rem;
}
.mr-4 {
  margin-right: 1rem;
}
.ms-1 {
  margin-inline-start: 0.25rem;
}
.ms-2 {
  margin-inline-start: 0.5rem;
}
.ms-3 {
  margin-inline-start: 0.75rem;
}
.ms-4 {
  margin-inline-start: 1rem;
}
.ms-6 {
  margin-inline-start: 1.5rem;
}
.ms-auto {
  margin-inline-start: auto;
}
.mt-0 {
  margin-top: 0px;
}
.mt-0\.5 {
  margin-top: 0.125rem;
}
.mt-1 {
  margin-top: 0.25rem;
}
.mt-10 {
  margin-top: 2.5rem;
}
.mt-2 {
  margin-top: 0.5rem;
}
.mt-20 {
  margin-top: 5rem;
}
.mt-3 {
  margin-top: 0.75rem;
}
.mt-4 {
  margin-top: 1rem;
}
.mt-5 {
  margin-top: 1.25rem;
}
.mt-6 {
  margin-top: 1.5rem;
}
.mt-8 {
  margin-top: 2rem;
}
.block {
  display: block;
}
.inline-block {
  display: inline-block;
}
.inline {
  display: inline;
}
.flex {
  display: flex;
}
.inline-flex {
  display: inline-flex;
}
.grid {
  display: grid;
}
.\!hidden {
  display: none !important;
}
.hidden {
  display: none;
}
.aspect-video {
  aspect-ratio: 16 / 9;
}
.size-12 {
  width: 3rem;
  height: 3rem;
}
.size-5 {
  width: 1.25rem;
  height: 1.25rem;
}
.size-6 {
  width: 1.5rem;
  height: 1.5rem;
}
.h-10 {
  height: 2.5rem;
}
.h-11 {
  height: 2.75rem;
}
.h-12 {
  height: 3rem;
}
.h-16 {
  height: 4rem;
}
.h-20 {
  height: 5rem;
}
.h-24 {
  height: 6rem;
}
.h-3 {
  height: 0.75rem;
}
.h-3\.5 {
  height: 0.875rem;
}
.h-32 {
  height: 8rem;
}
.h-4 {
  height: 1rem;
}
.h-40 {
  height: 10rem;
}
.h-48 {
  height: 12rem;
}
.h-5 {
  height: 1.25rem;
}
.h-6 {
  height: 1.5rem;
}
.h-7 {
  height: 1.75rem;
}
.h-8 {
  height: 2rem;
}
.h-9 {
  height: 2.25rem;
}
.h-96 {
  height: 24rem;
}
.h-full {
  height: 100%;
}
.h-screen {
  height: 100vh;
}
.min-h-full {
  min-height: 100%;
}
.min-h-screen {
  min-height: 100vh;
}
.w-0 {
  width: 0px;
}
.w-1\/2 {
  width: 50%;
}
.w-10 {
  width: 2.5rem;
}
.w-11 {
  width: 2.75rem;
}
.w-12 {
  width: 3rem;
}
.w-16 {
  width: 4rem;
}
.w-20 {
  width: 5rem;
}
.w-24 {
  width: 6rem;
}
.w-3 {
  width: 0.75rem;
}
.w-3\.5 {
  width: 0.875rem;
}
.w-3\/4 {
  width: 75%;
}
.w-4 {
  width: 1rem;
}
.w-48 {
  width: 12rem;
}
.w-5 {
  width: 1.25rem;
}
.w-56 {
  width: 14rem;
}
.w-6 {
  width: 1.5rem;
}
.w-60 {
  width: 15rem;
}
.w-64 {
  width: 16rem;
}
.w-7 {
  width: 1.75rem;
}
.w-8 {
  width: 2rem;
}
.w-96 {
  width: 24rem;
}
.w-\[calc\(100\%\+8rem\)\] {
  width: calc(100% + 8rem);
}
.w-auto {
  width: auto;
}
.w-full {
  width: 100%;
}
.w-screen {
  width: 100vw;
}
.min-w-0 {
  min-width: 0px;
}
.min-w-full {
  min-width: 100%;
}
.max-w-2xl {
  max-width: 42rem;
}
.max-w-6xl {
  max-width: 72rem;
}
.max-w-7xl {
  max-width: 80rem;
}
.max-w-\[877px\] {
  max-width: 877px;
}
.max-w-screen-lg {
  max-width: 1024px;
}
.max-w-screen-md {
  max-width: 768px;
}
.max-w-screen-xl {
  max-width: 1280px;
}
.max-w-sm {
  max-width: 24rem;
}
.max-w-xl {
  max-width: 36rem;
}
.max-w-xs {
  max-width: 20rem;
}
.flex-1 {
  flex: 1 1 0%;
}
.flex-shrink-0 {
  flex-shrink: 0;
}
.shrink-0 {
  flex-shrink: 0;
}
.origin-top {
  transform-origin: top;
}
.-translate-x-1\/2 {
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-translate-x-full {
  --tw-translate-x: -100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-translate-y-4 {
  --tw-translate-y: -1rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-translate-y-7 {
  --tw-translate-y: -1.75rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-translate-y-full {
  --tw-translate-y: -100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.translate-y-0 {
  --tw-translate-y: 0px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.translate-y-16 {
  --tw-translate-y: 4rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.translate-y-4 {
  --tw-translate-y: 1rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.rotate-180 {
  --tw-rotate: 180deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.scale-100 {
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.scale-95 {
  --tw-scale-x: .95;
  --tw-scale-y: .95;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.scale-y-0 {
  --tw-scale-y: 0;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.scale-y-100 {
  --tw-scale-y: 1;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.cursor-default {
  cursor: default;
}
.cursor-pointer {
  cursor: pointer;
}
.select-none {
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}
.list-inside {
  list-style-position: inside;
}
.list-disc {
  list-style-type: disc;
}
.list-none {
  list-style-type: none;
}
.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}
.grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}
.grid-cols-3 {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}
.grid-cols-6 {
  grid-template-columns: repeat(6, minmax(0, 1fr));
}
.\!flex-row {
  flex-direction: row !important;
}
.flex-row {
  flex-direction: row;
}
.flex-col {
  flex-direction: column;
}
.flex-wrap {
  flex-wrap: wrap;
}
.items-start {
  align-items: flex-start;
}
.items-end {
  align-items: flex-end;
}
.items-center {
  align-items: center;
}
.items-stretch {
  align-items: stretch;
}
.justify-start {
  justify-content: flex-start;
}
.justify-end {
  justify-content: flex-end;
}
.justify-center {
  justify-content: center;
}
.justify-between {
  justify-content: space-between;
}
.justify-items-center {
  justify-items: center;
}
.gap-1 {
  gap: 0.25rem;
}
.gap-16 {
  gap: 4rem;
}
.gap-2 {
  gap: 0.5rem;
}
.gap-4 {
  gap: 1rem;
}
.gap-6 {
  gap: 1.5rem;
}
.gap-8 {
  gap: 2rem;
}
.space-x-3 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(0.75rem * var(--tw-space-x-reverse));
  margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-x-4 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(1rem * var(--tw-space-x-reverse));
  margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-x-6 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(1.5rem * var(--tw-space-x-reverse));
  margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-x-8 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(2rem * var(--tw-space-x-reverse));
  margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-y-1 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
}
.space-y-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}
.space-y-6 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
}
.space-y-8 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(2rem * var(--tw-space-y-reverse));
}
.divide-y > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-y-reverse: 0;
  border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
  border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
}
.divide-gray-100 > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-opacity: 1;
  border-color: rgb(243 244 246 / var(--tw-divide-opacity));
}
.place-self-center {
  place-self: center;
}
.self-center {
  align-self: center;
}
.overflow-hidden {
  overflow: hidden;
}
.overflow-y-auto {
  overflow-y: auto;
}
.scroll-smooth {
  scroll-behavior: smooth;
}
.truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.whitespace-nowrap {
  white-space: nowrap;
}
.break-all {
  word-break: break-all;
}
.rounded {
  border-radius: 0.25rem;
}
.rounded-\[10px\] {
  border-radius: 10px;
}
.rounded-full {
  border-radius: 9999px;
}
.rounded-lg {
  border-radius: 0.5rem;
}
.rounded-md {
  border-radius: 0.375rem;
}
.rounded-sm {
  border-radius: 0.125rem;
}
.rounded-xl {
  border-radius: 0.75rem;
}
.rounded-b-none {
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
}
.rounded-l-md {
  border-top-left-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}
.rounded-r-md {
  border-top-right-radius: 0.375rem;
  border-bottom-right-radius: 0.375rem;
}
.rounded-t-lg {
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}
.rounded-t-none {
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
}
.border {
  border-width: 1px;
}
.border-2 {
  border-width: 2px;
}
.border-b {
  border-bottom-width: 1px;
}
.border-b-2 {
  border-bottom-width: 2px;
}
.border-l-4 {
  border-left-width: 4px;
}
.border-r {
  border-right-width: 1px;
}
.border-t {
  border-top-width: 1px;
}
.border-dashed {
  border-style: dashed;
}
.border-gray-100 {
  --tw-border-opacity: 1;
  border-color: rgb(243 244 246 / var(--tw-border-opacity));
}
.border-gray-200 {
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
}
.border-gray-300 {
  --tw-border-opacity: 1;
  border-color: rgb(209 213 219 / var(--tw-border-opacity));
}
.border-gray-400 {
  --tw-border-opacity: 1;
  border-color: rgb(156 163 175 / var(--tw-border-opacity));
}
.border-indigo-400 {
  --tw-border-opacity: 1;
  border-color: rgb(129 140 248 / var(--tw-border-opacity));
}
.border-transparent {
  border-color: transparent;
}
.border-white {
  --tw-border-opacity: 1;
  border-color: rgb(255 255 255 / var(--tw-border-opacity));
}
.bg-\[\#FF2D20\]\/10 {
  background-color: rgb(255 45 32 / 0.1);
}
.bg-blue-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(219 234 254 / var(--tw-bg-opacity));
}
.bg-blue-700 {
  --tw-bg-opacity: 1;
  background-color: rgb(29 78 216 / var(--tw-bg-opacity));
}
.bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}
.bg-gray-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}
.bg-gray-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}
.bg-gray-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(107 114 128 / var(--tw-bg-opacity));
}
.bg-gray-800 {
  --tw-bg-opacity: 1;
  background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}
.bg-gray-900 {
  --tw-bg-opacity: 1;
  background-color: rgb(17 24 39 / var(--tw-bg-opacity));
}
.bg-green-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(220 252 231 / var(--tw-bg-opacity));
}
.bg-green-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(74 222 128 / var(--tw-bg-opacity));
}
.bg-green-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(34 197 94 / var(--tw-bg-opacity));
}
.bg-green-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(22 163 74 / var(--tw-bg-opacity));
}
.bg-indigo-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(238 242 255 / var(--tw-bg-opacity));
}
.bg-indigo-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(99 102 241 / var(--tw-bg-opacity));
}
.bg-indigo-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(79 70 229 / var(--tw-bg-opacity));
}
.bg-orange-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(255 237 213 / var(--tw-bg-opacity));
}
.bg-primary-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(219 234 254 / var(--tw-bg-opacity));
}
.bg-primary-700 {
  --tw-bg-opacity: 1;
  background-color: rgb(29 78 216 / var(--tw-bg-opacity));
}
.bg-purple-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(168 85 247 / var(--tw-bg-opacity));
}
.bg-red-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(254 226 226 / var(--tw-bg-opacity));
}
.bg-red-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(220 38 38 / var(--tw-bg-opacity));
}
.bg-red-700 {
  --tw-bg-opacity: 1;
  background-color: rgb(185 28 28 / var(--tw-bg-opacity));
}
.bg-transparent {
  background-color: transparent;
}
.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}
.bg-opacity-20 {
  --tw-bg-opacity: 0.2;
}
.bg-opacity-25 {
  --tw-bg-opacity: 0.25;
}
.bg-gradient-to-b {
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
}
.from-transparent {
  --tw-gradient-from: transparent var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}
.via-white {
  --tw-gradient-to: rgb(255 255 255 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to);
}
.to-white {
  --tw-gradient-to: #fff var(--tw-gradient-to-position);
}
.bg-cover {
  background-size: cover;
}
.bg-center {
  background-position: center;
}
.bg-no-repeat {
  background-repeat: no-repeat;
}
.fill-black {
  fill: #000;
}
.fill-indigo-500 {
  fill: #6366f1;
}
.stroke-\[\#FF2D20\] {
  stroke: #FF2D20;
}
.stroke-gray-400 {
  stroke: #9ca3af;
}
.object-cover {
  -o-object-fit: cover;
     object-fit: cover;
}
.object-top {
  -o-object-position: top;
     object-position: top;
}
.p-0 {
  padding: 0px;
}
.p-1 {
  padding: 0.25rem;
}
.p-1\.5 {
  padding: 0.375rem;
}
.p-2 {
  padding: 0.5rem;
}
.p-2\.5 {
  padding: 0.625rem;
}
.p-4 {
  padding: 1rem;
}
.p-6 {
  padding: 1.5rem;
}
.px-1 {
  padding-left: 0.25rem;
  padding-right: 0.25rem;
}
.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}
.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}
.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}
.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}
.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}
.py-10 {
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}
.py-12 {
  padding-top: 3rem;
  padding-bottom: 3rem;
}
.py-16 {
  padding-top: 4rem;
  padding-bottom: 4rem;
}
.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.py-2\.5 {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
}
.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.py-5 {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}
.py-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}
.py-8 {
  padding-top: 2rem;
  padding-bottom: 2rem;
}
.pb-1 {
  padding-bottom: 0.25rem;
}
.pb-3 {
  padding-bottom: 0.75rem;
}
.pb-4 {
  padding-bottom: 1rem;
}
.pe-4 {
  padding-inline-end: 1rem;
}
.pl-10 {
  padding-left: 2.5rem;
}
.pl-11 {
  padding-left: 2.75rem;
}
.pl-3 {
  padding-left: 0.75rem;
}
.ps-3 {
  padding-inline-start: 0.75rem;
}
.pt-1 {
  padding-top: 0.25rem;
}
.pt-2 {
  padding-top: 0.5rem;
}
.pt-24 {
  padding-top: 6rem;
}
.pt-3 {
  padding-top: 0.75rem;
}
.pt-4 {
  padding-top: 1rem;
}
.pt-5 {
  padding-top: 1.25rem;
}
.pt-6 {
  padding-top: 1.5rem;
}
.pt-8 {
  padding-top: 2rem;
}
.text-left {
  text-align: left;
}
.text-center {
  text-align: center;
}
.text-right {
  text-align: right;
}
.text-start {
  text-align: start;
}
.text-end {
  text-align: end;
}
.font-sans {
  font-family: Inter, ui-sans-serif, system-ui, -apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
}
.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}
.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}
.text-4xl {
  font-size: 2.25rem;
  line-height: 2.5rem;
}
.text-base {
  font-size: 1rem;
  line-height: 1.5rem;
}
.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}
.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}
.text-sm\/relaxed {
  font-size: 0.875rem;
  line-height: 1.625;
}
.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}
.text-xs {
  font-size: 0.75rem;
  line-height: 1rem;
}
.font-bold {
  font-weight: 700;
}
.font-extrabold {
  font-weight: 800;
}
.font-light {
  font-weight: 300;
}
.font-medium {
  font-weight: 500;
}
.font-normal {
  font-weight: 400;
}
.font-semibold {
  font-weight: 600;
}
.uppercase {
  text-transform: uppercase;
}
.italic {
  font-style: italic;
}
.leading-4 {
  line-height: 1rem;
}
.leading-5 {
  line-height: 1.25rem;
}
.leading-7 {
  line-height: 1.75rem;
}
.leading-none {
  line-height: 1;
}
.leading-relaxed {
  line-height: 1.625;
}
.leading-tight {
  line-height: 1.25;
}
.tracking-tight {
  letter-spacing: -0.025em;
}
.tracking-wider {
  letter-spacing: 0.05em;
}
.tracking-widest {
  letter-spacing: 0.1em;
}
.text-black {
  --tw-text-opacity: 1;
  color: rgb(0 0 0 / var(--tw-text-opacity));
}
.text-black\/50 {
  color: rgb(0 0 0 / 0.5);
}
.text-blue-500 {
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}
.text-gray-200 {
  --tw-text-opacity: 1;
  color: rgb(229 231 235 / var(--tw-text-opacity));
}
.text-gray-300 {
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}
.text-gray-400 {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}
.text-gray-500 {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}
.text-gray-600 {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}
.text-gray-700 {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}
.text-gray-800 {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}
.text-gray-900 {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
}
.text-green-400 {
  --tw-text-opacity: 1;
  color: rgb(74 222 128 / var(--tw-text-opacity));
}
.text-green-500 {
  --tw-text-opacity: 1;
  color: rgb(34 197 94 / var(--tw-text-opacity));
}
.text-green-600 {
  --tw-text-opacity: 1;
  color: rgb(22 163 74 / var(--tw-text-opacity));
}
.text-indigo-600 {
  --tw-text-opacity: 1;
  color: rgb(79 70 229 / var(--tw-text-opacity));
}
.text-indigo-700 {
  --tw-text-opacity: 1;
  color: rgb(67 56 202 / var(--tw-text-opacity));
}
.text-orange-500 {
  --tw-text-opacity: 1;
  color: rgb(249 115 22 / var(--tw-text-opacity));
}
.text-primary-600 {
  --tw-text-opacity: 1;
  color: rgb(37 99 235 / var(--tw-text-opacity));
}
.text-red-500 {
  --tw-text-opacity: 1;
  color: rgb(239 68 68 / var(--tw-text-opacity));
}
.text-red-600 {
  --tw-text-opacity: 1;
  color: rgb(220 38 38 / var(--tw-text-opacity));
}
.text-slate-400 {
  --tw-text-opacity: 1;
  color: rgb(148 163 184 / var(--tw-text-opacity));
}
.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}
.underline {
  text-decoration-line: underline;
}
.antialiased {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.opacity-0 {
  opacity: 0;
}
.opacity-100 {
  opacity: 1;
}
.opacity-25 {
  opacity: 0.25;
}
.opacity-50 {
  opacity: 0.5;
}
.opacity-75 {
  opacity: 0.75;
}
.shadow {
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
  --tw-shadow: 0px 14px 34px 0px rgba(0,0,0,0.08);
  --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-md {
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-sm {
  --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-xl {
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.ring-1 {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}
.ring-black {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity));
}
.ring-gray-300 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity));
}
.ring-transparent {
  --tw-ring-color: transparent;
}
.ring-white\/\[0\.05\] {
  --tw-ring-color: rgb(255 255 255 / 0.05);
}
.ring-opacity-5 {
  --tw-ring-opacity: 0.05;
}
.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
  --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,0.06));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}
.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
  --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,0.25));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}
.transition {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-opacity {
  transition-property: opacity;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.duration-1000 {
  transition-duration: 1000ms;
}
.duration-150 {
  transition-duration: 150ms;
}
.duration-200 {
  transition-duration: 200ms;
}
.duration-300 {
  transition-duration: 300ms;
}
.duration-75 {
  transition-duration: 75ms;
}
.ease-in {
  transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
}
.ease-in-out {
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.ease-out {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
}
.scrollbar::-webkit-scrollbar-track {
  background-color: var(--scrollbar-track);
  border-radius: var(--scrollbar-track-radius);
}
.scrollbar::-webkit-scrollbar-track:hover {
  background-color: var(--scrollbar-track-hover, var(--scrollbar-track));
}
.scrollbar::-webkit-scrollbar-track:active {
  background-color: var(--scrollbar-track-active, var(--scrollbar-track-hover, var(--scrollbar-track)));
}
.scrollbar::-webkit-scrollbar-thumb {
  background-color: var(--scrollbar-thumb);
  border-radius: var(--scrollbar-thumb-radius);
}
.scrollbar::-webkit-scrollbar-thumb:hover {
  background-color: var(--scrollbar-thumb-hover, var(--scrollbar-thumb));
}
.scrollbar::-webkit-scrollbar-thumb:active {
  background-color: var(--scrollbar-thumb-active, var(--scrollbar-thumb-hover, var(--scrollbar-thumb)));
}
.scrollbar::-webkit-scrollbar-corner {
  background-color: var(--scrollbar-corner);
  border-radius: var(--scrollbar-corner-radius);
}
.scrollbar::-webkit-scrollbar-corner:hover {
  background-color: var(--scrollbar-corner-hover, var(--scrollbar-corner));
}
.scrollbar::-webkit-scrollbar-corner:active {
  background-color: var(--scrollbar-corner-active, var(--scrollbar-corner-hover, var(--scrollbar-corner)));
}
.scrollbar {
  scrollbar-width: auto;
  scrollbar-color: var(--scrollbar-thumb, initial) var(--scrollbar-track, initial);
}
.scrollbar::-webkit-scrollbar {
  display: block;
  width: var(--scrollbar-width, 16px);
  height: var(--scrollbar-height, 16px);
}
.scrollbar-track-transparent {
  --scrollbar-track: transparent !important;
}
.scrollbar-thumb-gray-300 {
  --scrollbar-thumb: #d1d5db !important;
}

[x-cloak] {
    display: none;
}

@media (prefers-color-scheme: dark) {

  .dark\:prose-invert {
    --tw-prose-body: var(--tw-prose-invert-body);
    --tw-prose-headings: var(--tw-prose-invert-headings);
    --tw-prose-lead: var(--tw-prose-invert-lead);
    --tw-prose-links: var(--tw-prose-invert-links);
    --tw-prose-bold: var(--tw-prose-invert-bold);
    --tw-prose-counters: var(--tw-prose-invert-counters);
    --tw-prose-bullets: var(--tw-prose-invert-bullets);
    --tw-prose-hr: var(--tw-prose-invert-hr);
    --tw-prose-quotes: var(--tw-prose-invert-quotes);
    --tw-prose-quote-borders: var(--tw-prose-invert-quote-borders);
    --tw-prose-captions: var(--tw-prose-invert-captions);
    --tw-prose-kbd: var(--tw-prose-invert-kbd);
    --tw-prose-kbd-shadows: var(--tw-prose-invert-kbd-shadows);
    --tw-prose-code: var(--tw-prose-invert-code);
    --tw-prose-pre-code: var(--tw-prose-invert-pre-code);
    --tw-prose-pre-bg: var(--tw-prose-invert-pre-bg);
    --tw-prose-th-borders: var(--tw-prose-invert-th-borders);
    --tw-prose-td-borders: var(--tw-prose-invert-td-borders);
  }
}

.selection\:bg-\[\#FF2D20\] *::-moz-selection {
  --tw-bg-opacity: 1;
  background-color: rgb(255 45 32 / var(--tw-bg-opacity));
}

.selection\:bg-\[\#FF2D20\] *::selection {
  --tw-bg-opacity: 1;
  background-color: rgb(255 45 32 / var(--tw-bg-opacity));
}

.selection\:text-white *::-moz-selection {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.selection\:text-white *::selection {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.selection\:bg-\[\#FF2D20\]::-moz-selection {
  --tw-bg-opacity: 1;
  background-color: rgb(255 45 32 / var(--tw-bg-opacity));
}

.selection\:bg-\[\#FF2D20\]::selection {
  --tw-bg-opacity: 1;
  background-color: rgb(255 45 32 / var(--tw-bg-opacity));
}

.selection\:text-white::-moz-selection {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.selection\:text-white::selection {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.backdrop\:bg-transparent::backdrop {
  background-color: transparent;
}

.group:hover .group-hover\:text-gray-500 {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.group:hover .group-hover\:text-gray-900 {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
}

.hover\:-translate-y-1:hover {
  --tw-translate-y: -0.25rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.hover\:border-gray-300:hover {
  --tw-border-opacity: 1;
  border-color: rgb(209 213 219 / var(--tw-border-opacity));
}

.hover\:bg-blue-800:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(30 64 175 / var(--tw-bg-opacity));
}

.hover\:bg-gray-100:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.hover\:bg-gray-50:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.hover\:bg-gray-700:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}

.hover\:bg-green-600:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(22 163 74 / var(--tw-bg-opacity));
}

.hover\:bg-indigo-600:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(79 70 229 / var(--tw-bg-opacity));
}

.hover\:bg-primary-800:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(30 64 175 / var(--tw-bg-opacity));
}

.hover\:bg-red-500:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}

.hover\:bg-red-600:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(220 38 38 / var(--tw-bg-opacity));
}

.hover\:bg-opacity-70:hover {
  --tw-bg-opacity: 0.7;
}

.hover\:text-black:hover {
  --tw-text-opacity: 1;
  color: rgb(0 0 0 / var(--tw-text-opacity));
}

.hover\:text-black\/70:hover {
  color: rgb(0 0 0 / 0.7);
}

.hover\:text-gray-400:hover {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.hover\:text-gray-500:hover {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.hover\:text-gray-700:hover {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.hover\:text-gray-800:hover {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.hover\:text-gray-900:hover {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
}

.hover\:underline:hover {
  text-decoration-line: underline;
}

.hover\:ring-black\/20:hover {
  --tw-ring-color: rgb(0 0 0 / 0.2);
}

.hover\:scrollbar-thumb-gray-500 {
  --scrollbar-thumb-hover: #6b7280 !important;
}

.focus\:z-10:focus {
  z-index: 10;
}

.focus\:border-none:focus {
  border-style: none;
}

.focus\:border-blue-300:focus {
  --tw-border-opacity: 1;
  border-color: rgb(147 197 253 / var(--tw-border-opacity));
}

.focus\:border-gray-300:focus {
  --tw-border-opacity: 1;
  border-color: rgb(209 213 219 / var(--tw-border-opacity));
}

.focus\:border-indigo-500:focus {
  --tw-border-opacity: 1;
  border-color: rgb(99 102 241 / var(--tw-border-opacity));
}

.focus\:border-indigo-700:focus {
  --tw-border-opacity: 1;
  border-color: rgb(67 56 202 / var(--tw-border-opacity));
}

.focus\:border-primary-500:focus {
  --tw-border-opacity: 1;
  border-color: rgb(59 130 246 / var(--tw-border-opacity));
}

.focus\:bg-gray-100:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.focus\:bg-gray-50:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.focus\:bg-gray-700:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}

.focus\:bg-green-600:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(22 163 74 / var(--tw-bg-opacity));
}

.focus\:bg-indigo-100:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(224 231 255 / var(--tw-bg-opacity));
}

.focus\:bg-indigo-600:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(79 70 229 / var(--tw-bg-opacity));
}

.focus\:bg-red-600:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(220 38 38 / var(--tw-bg-opacity));
}

.focus\:text-gray-500:focus {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.focus\:text-gray-700:focus {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.focus\:text-gray-800:focus {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.focus\:text-indigo-800:focus {
  --tw-text-opacity: 1;
  color: rgb(55 48 163 / var(--tw-text-opacity));
}

.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus\:ring:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-2:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-4:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-blue-300:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(147 197 253 / var(--tw-ring-opacity));
}

.focus\:ring-gray-100:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(243 244 246 / var(--tw-ring-opacity));
}

.focus\:ring-gray-200:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(229 231 235 / var(--tw-ring-opacity));
}

.focus\:ring-gray-300:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity));
}

.focus\:ring-indigo-500:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity));
}

.focus\:ring-primary-300:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(147 197 253 / var(--tw-ring-opacity));
}

.focus\:ring-primary-500:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity));
}

.focus\:ring-red-500:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
}

.focus\:ring-offset-2:focus {
  --tw-ring-offset-width: 2px;
}

.focus-visible\:ring-1:focus-visible {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus-visible\:ring-\[\#FF2D20\]:focus-visible {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity));
}

.active\:bg-gray-100:active {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.active\:bg-gray-50:active {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.active\:bg-gray-900:active {
  --tw-bg-opacity: 1;
  background-color: rgb(17 24 39 / var(--tw-bg-opacity));
}

.active\:bg-red-700:active {
  --tw-bg-opacity: 1;
  background-color: rgb(185 28 28 / var(--tw-bg-opacity));
}

.active\:text-gray-500:active {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.active\:text-gray-700:active {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.active\:scrollbar-thumb-gray-400 {
  --scrollbar-thumb-active: #9ca3af !important;
}

.disabled\:opacity-25:disabled {
  opacity: 0.25;
}

@media (min-width: 640px) {

  .sm\:col-span-4 {
    grid-column: span 4 / span 4;
  }

  .sm\:-my-px {
    margin-top: -1px;
    margin-bottom: -1px;
  }

  .sm\:mx-0 {
    margin-left: 0px;
    margin-right: 0px;
  }

  .sm\:mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .sm\:-me-2 {
    margin-inline-end: -0.5rem;
  }

  .sm\:ms-10 {
    margin-inline-start: 2.5rem;
  }

  .sm\:ms-3 {
    margin-inline-start: 0.75rem;
  }

  .sm\:ms-4 {
    margin-inline-start: 1rem;
  }

  .sm\:ms-6 {
    margin-inline-start: 1.5rem;
  }

  .sm\:mt-0 {
    margin-top: 0px;
  }

  .sm\:mt-10 {
    margin-top: 2.5rem;
  }

  .sm\:block {
    display: block;
  }

  .sm\:flex {
    display: flex;
  }

  .sm\:hidden {
    display: none;
  }

  .sm\:size-16 {
    width: 4rem;
    height: 4rem;
  }

  .sm\:size-6 {
    width: 1.5rem;
    height: 1.5rem;
  }

  .sm\:h-10 {
    height: 2.5rem;
  }

  .sm\:w-10 {
    width: 2.5rem;
  }

  .sm\:w-full {
    width: 100%;
  }

  .sm\:max-w-2xl {
    max-width: 42rem;
  }

  .sm\:max-w-lg {
    max-width: 32rem;
  }

  .sm\:max-w-md {
    max-width: 28rem;
  }

  .sm\:max-w-sm {
    max-width: 24rem;
  }

  .sm\:max-w-xl {
    max-width: 36rem;
  }

  .sm\:flex-1 {
    flex: 1 1 0%;
  }

  .sm\:translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .sm\:scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .sm\:scale-95 {
    --tw-scale-x: .95;
    --tw-scale-y: .95;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .sm\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .sm\:items-start {
    align-items: flex-start;
  }

  .sm\:items-center {
    align-items: center;
  }

  .sm\:justify-start {
    justify-content: flex-start;
  }

  .sm\:justify-center {
    justify-content: center;
  }

  .sm\:justify-between {
    justify-content: space-between;
  }

  .sm\:gap-12 {
    gap: 3rem;
  }

  .sm\:gap-6 {
    gap: 1.5rem;
  }

  .sm\:rounded-lg {
    border-radius: 0.5rem;
  }

  .sm\:rounded-md {
    border-radius: 0.375rem;
  }

  .sm\:rounded-bl-md {
    border-bottom-left-radius: 0.375rem;
  }

  .sm\:rounded-br-md {
    border-bottom-right-radius: 0.375rem;
  }

  .sm\:rounded-tl-md {
    border-top-left-radius: 0.375rem;
  }

  .sm\:rounded-tr-md {
    border-top-right-radius: 0.375rem;
  }

  .sm\:p-6 {
    padding: 1.5rem;
  }

  .sm\:px-0 {
    padding-left: 0px;
    padding-right: 0px;
  }

  .sm\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .sm\:py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  .sm\:pb-4 {
    padding-bottom: 1rem;
  }

  .sm\:pt-0 {
    padding-top: 0px;
  }

  .sm\:pt-14 {
    padding-top: 3.5rem;
  }

  .sm\:pt-5 {
    padding-top: 1.25rem;
  }

  .sm\:text-center {
    text-align: center;
  }

  .sm\:text-start {
    text-align: start;
  }

  .sm\:text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .sm\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }
}

@media (min-width: 768px) {

  .md\:order-1 {
    order: 1;
  }

  .md\:order-2 {
    order: 2;
  }

  .md\:col-span-1 {
    grid-column: span 1 / span 1;
  }

  .md\:col-span-2 {
    grid-column: span 2 / span 2;
  }

  .md\:row-span-3 {
    grid-row: span 3 / span 3;
  }

  .md\:mb-0 {
    margin-bottom: 0px;
  }

  .md\:ml-64 {
    margin-left: 16rem;
  }

  .md\:mr-0 {
    margin-right: 0px;
  }

  .md\:mt-0 {
    margin-top: 0px;
  }

  .md\:block {
    display: block;
  }

  .md\:flex {
    display: flex;
  }

  .md\:grid {
    display: grid;
  }

  .md\:hidden {
    display: none;
  }

  .md\:h-64 {
    height: 16rem;
  }

  .md\:h-72 {
    height: 18rem;
  }

  .md\:w-64 {
    width: 16rem;
  }

  .md\:w-auto {
    width: auto;
  }

  .md\:translate-x-0 {
    --tw-translate-x: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .md\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .md\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .md\:flex-row {
    flex-direction: row;
  }

  .md\:justify-between {
    justify-content: space-between;
  }

  .md\:gap-12 {
    gap: 3rem;
  }

  .md\:gap-6 {
    gap: 1.5rem;
  }

  .md\:space-x-0 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0px * var(--tw-space-x-reverse));
    margin-left: calc(0px * calc(1 - var(--tw-space-x-reverse)));
  }

  .md\:space-x-8 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(2rem * var(--tw-space-x-reverse));
    margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
  }

  .md\:space-y-0 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0px * var(--tw-space-y-reverse));
  }

  .md\:border-0 {
    border-width: 0px;
  }

  .md\:bg-transparent {
    background-color: transparent;
  }

  .md\:bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  }

  .md\:p-0 {
    padding: 0px;
  }

  .md\:pl-2 {
    padding-left: 0.5rem;
  }

  .md\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .md\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .md\:text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .md\:text-blue-700 {
    --tw-text-opacity: 1;
    color: rgb(29 78 216 / var(--tw-text-opacity));
  }

  .md\:hover\:bg-transparent:hover {
    background-color: transparent;
  }

  .md\:hover\:text-blue-700:hover {
    --tw-text-opacity: 1;
    color: rgb(29 78 216 / var(--tw-text-opacity));
  }
}

@media (min-width: 1024px) {

  .lg\:order-2 {
    order: 2;
  }

  .lg\:col-span-4 {
    grid-column: span 4 / span 4;
  }

  .lg\:col-span-5 {
    grid-column: span 5 / span 5;
  }

  .lg\:col-span-7 {
    grid-column: span 7 / span 7;
  }

  .lg\:col-start-2 {
    grid-column-start: 2;
  }

  .lg\:my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem;
  }

  .lg\:mb-16 {
    margin-bottom: 4rem;
  }

  .lg\:mb-6 {
    margin-bottom: 1.5rem;
  }

  .lg\:mb-8 {
    margin-bottom: 2rem;
  }

  .lg\:ml-auto {
    margin-left: auto;
  }

  .lg\:mt-0 {
    margin-top: 0px;
  }

  .lg\:mt-10 {
    margin-top: 2.5rem;
  }

  .lg\:flex {
    display: flex;
  }

  .lg\:grid {
    display: grid;
  }

  .lg\:h-12 {
    height: 3rem;
  }

  .lg\:h-16 {
    height: 4rem;
  }

  .lg\:h-6 {
    height: 1.5rem;
  }

  .lg\:w-12 {
    width: 3rem;
  }

  .lg\:w-6 {
    width: 1.5rem;
  }

  .lg\:max-w-7xl {
    max-width: 80rem;
  }

  .lg\:grid-cols-12 {
    grid-template-columns: repeat(12, minmax(0, 1fr));
  }

  .lg\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .lg\:grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .lg\:grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }

  .lg\:flex-col {
    flex-direction: column;
  }

  .lg\:items-end {
    align-items: flex-end;
  }

  .lg\:justify-center {
    justify-content: center;
  }

  .lg\:gap-8 {
    gap: 2rem;
  }

  .lg\:p-10 {
    padding: 2.5rem;
  }

  .lg\:p-8 {
    padding: 2rem;
  }

  .lg\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .lg\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .lg\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .lg\:py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }

  .lg\:pb-10 {
    padding-bottom: 2.5rem;
  }

  .lg\:pt-0 {
    padding-top: 0px;
  }

  .lg\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }

  .lg\:text-\[\#FF2D20\] {
    --tw-text-opacity: 1;
    color: rgb(255 45 32 / var(--tw-text-opacity));
  }
}

@media (min-width: 1280px) {

  .xl\:gap-0 {
    gap: 0px;
  }

  .xl\:gap-16 {
    gap: 4rem;
  }

  .xl\:text-6xl {
    font-size: 3.75rem;
    line-height: 1;
  }

  .xl\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }
}

.ltr\:origin-top-left:where([dir="ltr"], [dir="ltr"] *) {
  transform-origin: top left;
}

.ltr\:origin-top-right:where([dir="ltr"], [dir="ltr"] *) {
  transform-origin: top right;
}

.rtl\:origin-top-left:where([dir="rtl"], [dir="rtl"] *) {
  transform-origin: top left;
}

.rtl\:origin-top-right:where([dir="rtl"], [dir="rtl"] *) {
  transform-origin: top right;
}

.rtl\:flex-row-reverse:where([dir="rtl"], [dir="rtl"] *) {
  flex-direction: row-reverse;
}

.rtl\:space-x-reverse:where([dir="rtl"], [dir="rtl"] *) > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 1;
}

@media (prefers-color-scheme: dark) {

  .dark\:block {
    display: block;
  }

  .dark\:hidden {
    display: none;
  }

  .dark\:divide-gray-600 > :not([hidden]) ~ :not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(75 85 99 / var(--tw-divide-opacity));
  }

  .dark\:border-gray-500 {
    --tw-border-opacity: 1;
    border-color: rgb(107 114 128 / var(--tw-border-opacity));
  }

  .dark\:border-gray-600 {
    --tw-border-opacity: 1;
    border-color: rgb(75 85 99 / var(--tw-border-opacity));
  }

  .dark\:border-gray-700 {
    --tw-border-opacity: 1;
    border-color: rgb(55 65 81 / var(--tw-border-opacity));
  }

  .dark\:border-indigo-600 {
    --tw-border-opacity: 1;
    border-color: rgb(79 70 229 / var(--tw-border-opacity));
  }

  .dark\:bg-black {
    --tw-bg-opacity: 1;
    background-color: rgb(0 0 0 / var(--tw-bg-opacity));
  }

  .dark\:bg-blue-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(37 99 235 / var(--tw-bg-opacity));
  }

  .dark\:bg-blue-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(30 64 175 / var(--tw-bg-opacity));
  }

  .dark\:bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity));
  }

  .dark\:bg-gray-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(75 85 99 / var(--tw-bg-opacity));
  }

  .dark\:bg-gray-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  }

  .dark\:bg-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
  }

  .dark\:bg-gray-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39 / var(--tw-bg-opacity));
  }

  .dark\:bg-green-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(22 101 52 / var(--tw-bg-opacity));
  }

  .dark\:bg-indigo-900\/50 {
    background-color: rgb(49 46 129 / 0.5);
  }

  .dark\:bg-orange-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(154 52 18 / var(--tw-bg-opacity));
  }

  .dark\:bg-primary-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(30 58 138 / var(--tw-bg-opacity));
  }

  .dark\:bg-red-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(153 27 27 / var(--tw-bg-opacity));
  }

  .dark\:bg-zinc-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(24 24 27 / var(--tw-bg-opacity));
  }

  .dark\:bg-opacity-20 {
    --tw-bg-opacity: 0.2;
  }

  .dark\:bg-gradient-to-bl {
    background-image: linear-gradient(to bottom left, var(--tw-gradient-stops));
  }

  .dark\:from-gray-700\/50 {
    --tw-gradient-from: rgb(55 65 81 / 0.5) var(--tw-gradient-from-position);
    --tw-gradient-to: rgb(55 65 81 / 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  }

  .dark\:via-transparent {
    --tw-gradient-to: rgb(0 0 0 / 0)  var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), transparent var(--tw-gradient-via-position), var(--tw-gradient-to);
  }

  .dark\:via-zinc-900 {
    --tw-gradient-to: rgb(24 24 27 / 0)  var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to);
  }

  .dark\:to-zinc-900 {
    --tw-gradient-to: #18181b var(--tw-gradient-to-position);
  }

  .dark\:fill-indigo-200 {
    fill: #c7d2fe;
  }

  .dark\:fill-white {
    fill: #fff;
  }

  .dark\:text-blue-200 {
    --tw-text-opacity: 1;
    color: rgb(191 219 254 / var(--tw-text-opacity));
  }

  .dark\:text-gray-100 {
    --tw-text-opacity: 1;
    color: rgb(243 244 246 / var(--tw-text-opacity));
  }

  .dark\:text-gray-200 {
    --tw-text-opacity: 1;
    color: rgb(229 231 235 / var(--tw-text-opacity));
  }

  .dark\:text-gray-300 {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity));
  }

  .dark\:text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
  }

  .dark\:text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity));
  }

  .dark\:text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity));
  }

  .dark\:text-gray-800 {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity));
  }

  .dark\:text-green-200 {
    --tw-text-opacity: 1;
    color: rgb(187 247 208 / var(--tw-text-opacity));
  }

  .dark\:text-green-400 {
    --tw-text-opacity: 1;
    color: rgb(74 222 128 / var(--tw-text-opacity));
  }

  .dark\:text-indigo-300 {
    --tw-text-opacity: 1;
    color: rgb(165 180 252 / var(--tw-text-opacity));
  }

  .dark\:text-orange-200 {
    --tw-text-opacity: 1;
    color: rgb(254 215 170 / var(--tw-text-opacity));
  }

  .dark\:text-primary-300 {
    --tw-text-opacity: 1;
    color: rgb(147 197 253 / var(--tw-text-opacity));
  }

  .dark\:text-primary-500 {
    --tw-text-opacity: 1;
    color: rgb(59 130 246 / var(--tw-text-opacity));
  }

  .dark\:text-red-200 {
    --tw-text-opacity: 1;
    color: rgb(254 202 202 / var(--tw-text-opacity));
  }

  .dark\:text-red-400 {
    --tw-text-opacity: 1;
    color: rgb(248 113 113 / var(--tw-text-opacity));
  }

  .dark\:text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .dark\:text-white\/50 {
    color: rgb(255 255 255 / 0.5);
  }

  .dark\:text-white\/70 {
    color: rgb(255 255 255 / 0.7);
  }

  .dark\:placeholder-gray-400::-moz-placeholder {
    --tw-placeholder-opacity: 1;
    color: rgb(156 163 175 / var(--tw-placeholder-opacity));
  }

  .dark\:placeholder-gray-400::placeholder {
    --tw-placeholder-opacity: 1;
    color: rgb(156 163 175 / var(--tw-placeholder-opacity));
  }

  .dark\:ring-zinc-800 {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity));
  }

  .dark\:scrollbar-thumb-gray-700 {
    --scrollbar-thumb: #374151 !important;
  }

  .group:hover .dark\:group-hover\:text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
  }

  .group:hover .dark\:group-hover\:text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .dark\:hover\:border-gray-600:hover {
    --tw-border-opacity: 1;
    border-color: rgb(75 85 99 / var(--tw-border-opacity));
  }

  .dark\:hover\:border-gray-700:hover {
    --tw-border-opacity: 1;
    border-color: rgb(55 65 81 / var(--tw-border-opacity));
  }

  .dark\:hover\:bg-blue-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(29 78 216 / var(--tw-bg-opacity));
  }

  .dark\:hover\:bg-gray-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(75 85 99 / var(--tw-bg-opacity));
  }

  .dark\:hover\:bg-gray-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  }

  .dark\:hover\:bg-gray-800:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
  }

  .dark\:hover\:bg-gray-900:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39 / var(--tw-bg-opacity));
  }

  .dark\:hover\:bg-white:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  }

  .hover\:dark\:bg-gray-500:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(107 114 128 / var(--tw-bg-opacity));
  }

  .hover\:dark\:bg-opacity-70:hover {
    --tw-bg-opacity: 0.7;
  }

  .dark\:hover\:text-gray-100:hover {
    --tw-text-opacity: 1;
    color: rgb(243 244 246 / var(--tw-text-opacity));
  }

  .dark\:hover\:text-gray-200:hover {
    --tw-text-opacity: 1;
    color: rgb(229 231 235 / var(--tw-text-opacity));
  }

  .dark\:hover\:text-gray-300:hover {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity));
  }

  .dark\:hover\:text-gray-400:hover {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
  }

  .dark\:hover\:text-white:hover {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .dark\:hover\:text-white\/70:hover {
    color: rgb(255 255 255 / 0.7);
  }

  .dark\:hover\:text-white\/80:hover {
    color: rgb(255 255 255 / 0.8);
  }

  .dark\:hover\:underline:hover {
    text-decoration-line: underline;
  }

  .dark\:hover\:ring-zinc-700:hover {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity));
  }

  .dark\:focus\:border-blue-700:focus {
    --tw-border-opacity: 1;
    border-color: rgb(29 78 216 / var(--tw-border-opacity));
  }

  .dark\:focus\:border-blue-800:focus {
    --tw-border-opacity: 1;
    border-color: rgb(30 64 175 / var(--tw-border-opacity));
  }

  .dark\:focus\:border-gray-600:focus {
    --tw-border-opacity: 1;
    border-color: rgb(75 85 99 / var(--tw-border-opacity));
  }

  .dark\:focus\:border-gray-700:focus {
    --tw-border-opacity: 1;
    border-color: rgb(55 65 81 / var(--tw-border-opacity));
  }

  .dark\:focus\:border-indigo-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(165 180 252 / var(--tw-border-opacity));
  }

  .dark\:focus\:border-indigo-600:focus {
    --tw-border-opacity: 1;
    border-color: rgb(79 70 229 / var(--tw-border-opacity));
  }

  .dark\:focus\:border-primary-500:focus {
    --tw-border-opacity: 1;
    border-color: rgb(59 130 246 / var(--tw-border-opacity));
  }

  .dark\:focus\:bg-gray-700:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  }

  .dark\:focus\:bg-gray-800:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
  }

  .dark\:focus\:bg-gray-900:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39 / var(--tw-bg-opacity));
  }

  .dark\:focus\:bg-indigo-900:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(49 46 129 / var(--tw-bg-opacity));
  }

  .dark\:focus\:bg-white:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  }

  .dark\:focus\:text-gray-200:focus {
    --tw-text-opacity: 1;
    color: rgb(229 231 235 / var(--tw-text-opacity));
  }

  .dark\:focus\:text-gray-300:focus {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity));
  }

  .dark\:focus\:text-gray-400:focus {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
  }

  .dark\:focus\:text-indigo-200:focus {
    --tw-text-opacity: 1;
    color: rgb(199 210 254 / var(--tw-text-opacity));
  }

  .dark\:focus\:ring-blue-800:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(30 64 175 / var(--tw-ring-opacity));
  }

  .dark\:focus\:ring-gray-600:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(75 85 99 / var(--tw-ring-opacity));
  }

  .dark\:focus\:ring-gray-700:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(55 65 81 / var(--tw-ring-opacity));
  }

  .dark\:focus\:ring-gray-800:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(31 41 55 / var(--tw-ring-opacity));
  }

  .dark\:focus\:ring-indigo-600:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(79 70 229 / var(--tw-ring-opacity));
  }

  .dark\:focus\:ring-primary-500:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity));
  }

  .dark\:focus\:ring-primary-900:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(30 58 138 / var(--tw-ring-opacity));
  }

  .dark\:focus\:ring-offset-gray-800:focus {
    --tw-ring-offset-color: #1f2937;
  }

  .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity));
  }

  .dark\:focus-visible\:ring-white:focus-visible {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
  }

  .dark\:active\:bg-gray-300:active {
    --tw-bg-opacity: 1;
    background-color: rgb(209 213 219 / var(--tw-bg-opacity));
  }

  .dark\:active\:bg-gray-700:active {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  }

  .dark\:active\:text-gray-300:active {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity));
  }
}

@media (min-width: 768px) {

  @media (prefers-color-scheme: dark) {

    .md\:dark\:bg-gray-900 {
      --tw-bg-opacity: 1;
      background-color: rgb(17 24 39 / var(--tw-bg-opacity));
    }

    .md\:dark\:text-blue-500 {
      --tw-text-opacity: 1;
      color: rgb(59 130 246 / var(--tw-text-opacity));
    }

    .md\:dark\:hover\:bg-transparent:hover {
      background-color: transparent;
    }

    .md\:dark\:hover\:text-blue-500:hover {
      --tw-text-opacity: 1;
      color: rgb(59 130 246 / var(--tw-text-opacity));
    }
  }
}

</style>
