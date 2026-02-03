# Workspace Problems Fix Plan

## Issues Identified
1. **Unknown @apply rules**: @apply directives used in HTML `<style>` tags, which linters don't recognize. Need to move these to CSS file.
2. **Duplicate font classes**: Classes like `font-medium font-semibold` applied together, causing redundancy warnings.

## Files to Edit
- HTML files with @apply in `<style>`: muziya.html, drnene.html, index.html, gallery.html, admissions.html
- HTML files with duplicate font classes: muziya.html, gallery.html, academics.html, events.html, admissions.html, about.html, sports.html, graduation.html
- CSS file to add styles: src/input.css

## Steps
1. Move @apply styles from HTML `<style>` tags to src/input.css
2. Remove duplicate font-medium classes where font-semibold is present
3. Remove `<style>` tags from HTML files after moving styles
4. Test that styles still work after changes

## Progress
- [ ] Add nav styles to src/input.css
- [ ] Remove `<style>` from muziya.html
- [ ] Remove `<style>` from drnene.html
- [ ] Remove `<style>` from index.html
- [ ] Remove `<style>` from gallery.html
- [ ] Remove `<style>` from admissions.html
- [ ] Fix duplicate font classes in all affected files
