# Day 01 – Laravel Routing Basics

### 📌 What I Learned Today:
- How to define simple Laravel routes
- Using optional parameters in routes
- Using route constraints:
  - `whereAlphaNumeric()`
  - `whereIn()`
  - Custom regex with `where()`
- Route chaining with multiple parameters

### 🗂 File
- `routes-practice.php`: Contains all the practice routes from today

---

🚀 This is part of my daily Laravel learning log. More updates coming soon!

# Day 02 – Named Routes, Redirects & Route Groups

## ✅ What I Practiced Today:

- **Named Routes** using `->name()` to simplify route access from Blade.
- **Redirects** with `Route::redirect()` and HTTP status codes:
  - `301` = Permanent (SEO-friendly redirect)
  - `302` = Temporary (default)
- **Route Groups** using `Route::prefix()` to group related routes under a common URL.

- # Day 03 – Blade Template Basics

## ✅ Topics Covered:
- Displaying data with `{{ }}` and `{!! !!}`
- Blade comments and escaping `@`
- PHP code in `@php` blocks
- Loops with `@foreach` and `$loop`:
  - `index`, `first`, `last`

## 🗂 File:
- `blade-practice.blade.php`: All Blade practice from today

---

Part of my Laravel daily learning journey # Day 04 – Blade Include & Conditions

## ✅ Topics Practiced:

- `@include('view')` – Include a Blade view normally.
- `@include('view', [...])` – Pass data to included view.
- `@includeIf('view')` – Include only if the view exists.
- `@includeWhen(condition, 'view')` – Include if condition is true.
- `@includeUnless(condition, 'view')` – Include if condition is false.

## 🧠 Data Example:
```php
$books = ["one" => "Apple", "two" => "Banana", "three" => "Orange"];




