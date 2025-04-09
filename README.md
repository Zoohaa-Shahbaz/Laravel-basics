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
