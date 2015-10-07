<?php if(!defined('KIRBY')) exit ?>

title: Work - Web
pages: false
files:
  sortable: true
fields:
  generalinfo:
    label: General Information
    type: headline
  title:
    label: Project Title
    type:  text
  tag1:
    label: Tag 1
    type:  text
    help: it will appear on hover and on landing on the case study page
  tag2:
    label: Tag 2
    type:  text
    help: it will appear on hover and on landing on the case study page
  categories:
    label: Categories
    type: checkboxes
    options:
      digital: Digital
      video: Video
      photography: Photography
    default: digital
    help: For the work page filter
  sidebarcontent:
    label: Sidebar Content
    type: headline
  client:
    label: Client
    type:  text
  services:
    label: Services
    type:  tags
  website:
    label: Website url
    type:  url
  casestudycontent:
    label: Case Study Content
    type: headline
  subtitle:
    label: Subtitle
    type:  text
  text:
    label: Text
    type:  textarea
  info3:
    label: Assets
    type: headline
  photo:
    label: How to add images
    type: info
    text: >
      To add images click on the 'add' button on the sidebar. Each image will have the long shadow designed for digital case studies.      

      To add a **thumbnail image**, you must name it **01-thumb.jpg**.
      
      To add a **landing image**, you must name it **02-landing.jpg**.
      

      Be sure to delete or rename the picture you have replaced.