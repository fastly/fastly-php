# Parse the release tag

# strip leading 'release/'
TAG="${GITHUB_REF_NAME#release/}"

# strip leading v
TAG_VALUE="${TAG#v}"

# strip trailing -dry
VERSION="${TAG_VALUE%-dry}"

# detect valid semver
VALID_VERSION=$(npx -y semver-parser-cli@0.2.0 "${VERSION}" --field matches)
if [ "${VALID_VERSION}" != "true" ]; then
  exit 1
fi

# Packagist version numbers cannot have a fourth segment.
# Check this by comparing pre and preid against each other, e.g.:
# 1.0.1-alpha.0 would have: pre=alpha,0 preid=alpha
# 1.0.1-alpha0 would have: pre=alpha0 preid=alpha0
# 1.0.1 would have: pre=undefined preid=undefined
PRE="$(npx -y semver-parser-cli@0.2.0 "${VERSION}" --field pre)"
PRE_ID="$(npx -y semver-parser-cli@0.2.0 "${VERSION}" --field preid)"
if [ "${PRE}" != "${PRE_ID}" ]; then
  exit 1
fi

# Detect dry run mode
DRY_RUN=0
if [ "${TAG_VALUE}" != "${VERSION}" ]; then
    DRY_RUN=1
fi

# publish tag ('alpha', 'beta', etc.)
PUBLISH_TAG="${PRE_ID}"
if [ "${PUBLISH_TAG}" == "undefined" ]; then
  PUBLISH_TAG=latest
fi

echo "API_CLIENT_NAME=PHP"
echo "PROJECT_NAME=fastly-php"
echo "PACKAGE_REPO_NAME=Packagist"
echo "VERSION=${VERSION}"
echo "DRY_RUN=${DRY_RUN}"
echo "PUBLISH_TAG=${PUBLISH_TAG}"
