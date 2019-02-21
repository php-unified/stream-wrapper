# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 1.0.1 - 2019-02-21
### Added
- CHANGELOG.md
- CONTRIBUTING.md
- phpcs.xml
- `squizlabs/php_codesniffer` package to dev requirements.

### Changed
- Archive exclusion rules in `composer.json`.
- `.travis.yml` added composer cache and added PHPCS test.
- `README.md` added Contributing and Change log additions.

### Deprecated
- Nothing

### Removed
- Nothing

### Fixed
- Warning suppression for implementation of PHP.
- Fixed indentation for some long doc block comments

### Security
- Nothing

## 1.0.0 - 2019-01-25
### Added
- `PhpUnified\StreamWrapper\Common\StreamWrapperInterface` to provide a commonality for all `StreamWrapper` implementations.
- `PhpUnified\StreamWrapper\Common\AbstractStreamWrapper` to provide a required public parameter for an implementation.
- `PhpUnified\StreamWrapper\VoidStreamWrapper` to provide an initial implementation that does nothing. This can also be used as a base implementation which shouldn't implement other functionalities it does not require.

### Changed
- Nothing

### Deprecated
- Nothing

### Removed
- Nothing

### Fixed
- Nothing

### Security
- Nothing

[Unreleased]: https://github.com/php-unified/stream-wrapper/compare/1.0.1...HEAD
[1.0.1]: https://github.com/php-unified/stream-wrapper/compare/1.0.0...1.0.1
