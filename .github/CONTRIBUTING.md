Thanks for contributing to `pstones_s` (Underscores) — you rock!

## Maintainers

`pstones_s` is maintained by the [Automattic Theme Team](https://themeshaper.com/about/).

## Reporting issues

Before submitting your issue, make sure it has not been discussed earlier. You can search for existing tickets [here](https://github.com/Automattic/pstones_s/search).

Here are some tips to consider and to help you write a great report:

* `pstones_s` supports Microsoft Internet Explorer 11 and Edge, as well as the latest two versions of all other major browsers.
* `pstones_s` is backwards compatible with the two versions prior to the current stable version of WordPress.
* `pstones_s` uses HTML5 markup.
* We decided not to include translations [[#50](https://github.com/Automattic/pstones_s/pull/50)] beyond the existing `pstones_s.pot` file, a RTL stylesheet [[#263](https://github.com/Automattic/pstones_s/pull/263)], or editor styles [[#225](https://github.com/Automattic/pstones_s/pull/225)], as they are likely to change during development of an `pstones_s` based theme.

## Sending a Pull Request

Found a bug you can fix? Fantastic! Patches are always welcome. Here's a few tips for crafting a great pull request:

* Include the purpose of your PR. Be explicit about the issue your PR solves.
* Reference any existing issues that relate to your PR. This allows everyone to easily see all related discussions.
* `pstones_s` complies with the [WordPress Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/) and any PR should comply as well.

### Before submitting a pull request, please make sure the following is done:

1. Fork the repo and create your branch from master.
2. Run `npm install` and `composer install`.
3. When submitting a change that affects SCSS sources, please make sure there is no linting errors using `npm run lint:scss`, then generate the css files using `npm run compile:css` and `npm run compile:rtl`.
4. When submitting a change that affects PHP files, please make sure there is no syntax or linting errors by running `composer lint:php` then `composer lint:wpcs`.
5. When submitting a change that affects JS files, please make sure there is no linting errors by running `npm run lint:js`.
6. When submitting a change that affects text strings, make sure to regenerate the POT file by running `composer make-pot`.

By contributing code to `pstones_s`, you grant its use under the [GNU General Public License v2 (or later)](LICENSE).

## Underscores.me

If your issue is specific to the [Underscores.me](https://underscores.me) website, the [Underscores.me GitHub repo](https://github.com/Automattic/underscores.me) is the right place for you.

The preferred method of generating a new theme based on `pstones_s` is the [Underscores.me](https://underscores.me) website. If you have an alternative method, such as a shell script, write a blog post about it or host it in a separate repo -- and make sure to mention [@underscoresme](https://twitter.com/underscoresme) in your tweets!

Want to have your avatar listed as one of the `pstones_s` contributors [here](https://underscores.me/#contribute)? Just make sure you have an email address added to both GitHub and your local Git installation.