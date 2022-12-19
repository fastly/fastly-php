echo "Publishing ${PROJECT_NAME} to ${PACKAGE_REPO_NAME}"
echo " Publishing version: ${VERSION}"
echo " Publish tag is ${PUBLISH_TAG}"

# Publishing to Packagist happens automatically.
# Packagist sees this push with this tag, and creates a version.

# perform publish
if [ "${DRY_RUN}" == "1" ]; then
  echo "(dry run)"
  echo "git tag v${VERSION}"
  echo "git push origin v${VERSION}"
else
  git tag "v${VERSION}"
  git push origin "v${VERSION}"
fi
