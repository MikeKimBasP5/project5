import { StyleSheet, View, Text, FlatList, ActivityIndicator, Image } from 'react-native';
import React, { } from 'react';
import 'react-native-gesture-handler';

const OefeningScreen = ({ route, navigation }) => {
  let text = route.params.data.instructionNL.replace(/\\n/g,'\n');
  return ( //return single exercise in dutch with a GIF and instruction
    <View style={styles.container}>
      <Text style={styles.header}>{route.params.data.titleNL}</Text>
      <Image
        style={{ width: '100%', height: '40%' }}
        source={{ uri: route.params.data.media }}
      />
      <Text style={styles.text}>{text}</Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#e9f7f7',
    alignItems: 'center',
  },
  header: {
    marginTop: 50,
    fontSize: 40,
    color: 'black',
  },
  text: {
    top: '5%',
    textAlign: 'center',
    color: 'black',
    fontSize: 20,
  },
});

export default OefeningScreen