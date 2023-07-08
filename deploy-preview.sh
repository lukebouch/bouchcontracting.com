#!/bin/sh

# Build the site
yarn build

# Deploy the site to Surge
surge ./dist mindless-thread.surge.sh
