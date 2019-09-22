name: Autocloser
on: [issues, pull_request]
jobs:
  autoclose:
    runs-on: ubuntu-latest
    steps:
    - name: Issue auto-closer
      uses: roots/issue-closer-action@v1.1
      with:
        repo-token: ${{ secrets.GITHUB_TOKEN }}
        issue-close-message: "@${issue.user.login} this issue was automatically closed because it did not follow the issue template"
        issue-pattern: ".*guidelines for Contributing.*"
