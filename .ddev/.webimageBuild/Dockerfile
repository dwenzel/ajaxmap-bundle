
ARG BASE_IMAGE
FROM $BASE_IMAGE

ARG username
ARG uid
ARG gid
RUN (groupadd --gid $gid "$username" || groupadd "$username" || true) && (useradd  -l -m --gid "$username" --comment '' --uid $uid "$username" || useradd  -l -m --gid "$username" --comment '' "$username")
 