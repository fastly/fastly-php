# RELEASE Process

- Merge all PRs intended for the release.
- Rebase the changes into `master` (e.g. `git pull --rebase origin master`).
- Create tag (e.g. `git tag -s vX.Y.Z -m "vX.Y.Z"`).
- Push tag (e.g. `git push origin vX.Y.Z`).
- Edit the [release](https://github.com/fastly/fastly-php/releases) and add CHANGELOG.

> NOTE: once a release is 'published' a webhook will publish the new release to [packagist.org/packages/fastly](https://packagist.org/packages/fastly/fastly).
