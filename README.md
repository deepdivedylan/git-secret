# git-secret

Test repository for `git-secret`

# Deployment

1. Create secrets and `.gitignore` the cleartext file `fuzzy.sh`
2. `git commit` the encrypted secrets
3. `git secret reveal` to decrypt secrets
4. `source .gitsecrets/secrets/fuzzy.sh`
5. `docker build -t git-secret:latest`
6. `docker run -d -e FOO="$FOO" -p 8888:80 git-secret:latest`