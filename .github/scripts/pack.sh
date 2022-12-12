# make a package
mkdir -p "${GITHUB_WORKSPACE}/dist"
composer archive --format=zip --dir="${GITHUB_WORKSPACE}/dist" --file="${PACKAGE_FILENAME%.zip}"
