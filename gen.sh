#!/bin/bash

# 更新依赖包
composer update

# 删除旧的代码
mkdir -p ./src
rm -rf ./src/*

#生成新的代码
# https://protobuf.dev/reference/php/php-generated/

# shellcheck disable=SC2046
root_dir="$(pwd)"
proto_path="$root_dir/vendor/buexplain/netsvr-protocol"
match="$proto_path/*.proto"
for file in $match; do
  proto="$(basename "$file")"
  echo "protoc --php_out=$root_dir/src --proto_path=$proto_path $proto"
  protoc --php_out="$root_dir/src" --proto_path="$proto_path" "$proto"
  # shellcheck disable=SC2181
  if [ $? != 0 ]; then
    # shellcheck disable=SC2162
    read
    exit $?
  fi
done