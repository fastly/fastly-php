# make a package
mkdir -p "${GITHUB_WORKSPACE}/temp"
# (In PHP, the filename for the packed archive is specified at the
# command line with the --file option.)
composer archive --format=zip --dir="${GITHUB_WORKSPACE}/temp" --file="fastly-${VERSION}"

# save the output filename to env
PACKAGE_FILENAME=$(cd "${GITHUB_WORKSPACE}/temp" && ls -1 -- *.zip)
echo "PACKAGE_FILENAME=${PACKAGE_FILENAME}" >> "${GITHUB_ENV}"

# move package to dist
mkdir -p "${GITHUB_WORKSPACE}/dist"
mv "${GITHUB_WORKSPACE}/temp/${PACKAGE_FILENAME}" "${GITHUB_WORKSPACE}/dist/${PACKAGE_FILENAME}"
